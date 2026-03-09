<?php
namespace App\Http\Controllers;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

public function store(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email|unique:subscribers,email'
    ]);

    Subscriber::create([
        'email' => $request->email,
        'source' => $request->source ?? 'footer'
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Thanks! Subscribed successfully!'
    ]);
}
}
