<?php
// app/Http/Controllers/ThemeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function toggle(Request $request)
    {
        $theme = $request->input('theme', 'light');
        
        // Validate
        if (!in_array($theme, ['light', 'dark'])) {
            $theme = 'light';
        }
        
        // Set cookie for 1 year
        return response()->json(['success' => true])
            ->cookie('theme', $theme, 525600, null, null, false, false);
    }
}