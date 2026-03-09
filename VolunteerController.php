<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class VolunteerController extends Controller
{
    /**
     * Display the volunteer form.
     */
    public function index()
    {
        return view('pages.volunteer'); // Assuming your blade is volunteer.blade.php
    }

    /**
     * Store a newly created volunteer application in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data [web:1][web:7]
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'date_of_birth' => 'nullable|date|before:today',
            'occupation' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        try {
            // Create the volunteer record [web:3][web:9]
            $volunteer = Volunteer::create($validated);

            // Optional: Send admin notification email
            // Mail::to('info@naretuinitiatives.org')->send(new VolunteerApplication($volunteer));

            Log::info('New volunteer application received: ' . $volunteer->id);

            return redirect()->back()->with('success', 
    'Thanks for your interest! We will contact you soon.'
);

        } catch (\Exception $e) {
            Log::error('Volunteer store failed: ' . $e->getMessage());

 return redirect()->back()->with('error', 
 'Sorry, something went wrong. Please try again!.'
);

        }
    }
}
