<?php

namespace App\Http\Middleware;

protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        return route('login');
    }
}
