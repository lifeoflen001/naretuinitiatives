<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function startFundraiser()
    {
        $comments = Comment::where('cause_id', 1)
            ->whereNull('parent_id')
            ->with(['replies' => function($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.donating.start_fundraiser', compact('comments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
            'cause_id' => 'nullable|integer',
            'parent_id' => 'nullable|integer|exists:comments,id'
        ]);

        // Set default cause_id if not provided
        if (empty($validated['cause_id'])) {
            $validated['cause_id'] = 1;
        }

        $comment = Comment::create($validated);

        // Load relationships if it's a reply
        if ($comment->parent_id) {
            $comment->load('parent');
        }

        return response()->json([
            'success' => true,
            'message' => 'Comment posted successfully',
            'comment' => [
                'id' => $comment->id,
                'name' => $comment->name,
                'email' => $comment->email,
                'message' => $comment->message,
                'cause_id' => $comment->cause_id,
                'parent_id' => $comment->parent_id,
                'user_avatar' => $comment->user_avatar ?? null,
                'created_at' => $comment->created_at->toISOString(),
                'formatted_time' => $comment->created_at->diffForHumans(),
                'can_unsend' => true, // Always true for new comments
                'timestamp' => $comment->created_at->timestamp
            ]
        ]);
    }

    public function destroy($id)
    {
        try {
            $comment = Comment::findOrFail($id);
            
            // Check if comment is within 5-second unsend window
            if ($comment->created_at->diffInSeconds(now()) > 5) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unsend window has expired'
                ], 403);
            }

            // Delete replies if it's a parent comment
            if ($comment->replies()->count() > 0) {
                $comment->replies()->delete();
            }
            
            $comment->delete();

            return response()->json([
                'success' => true,
                'message' => 'Comment unsent successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to unsend comment'
            ], 500);
        }
    }
}