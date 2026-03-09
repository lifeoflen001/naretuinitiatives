<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;
use App\Models\Event;
use App\Models\Post;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            'q' => 'required|string|min:2'
        ]);

        $query = $request->q;

        // Search Causes
        $causes = Cause::where('title', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%")
                        ->get();

        // Search Events (if exists)
        $events = class_exists(Event::class)
            ? Event::where('title', 'LIKE', "%{$query}%")
                   ->orWhere('description', 'LIKE', "%{$query}%")
                   ->get()
            : collect();

        // Search Blog Posts (if exists)
        $posts = class_exists(Post::class)
            ? Post::where('title', 'LIKE', "%{$query}%")
                  ->orWhere('content', 'LIKE', "%{$query}%")
                  ->get()
            : collect();

        return view('pages.search-results', compact(
            'query',
            'causes',
            'events',
            'posts'
        ));
    }
}
