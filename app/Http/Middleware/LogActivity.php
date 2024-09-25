<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check()) {
            $activity = sprintf(
                'User %s accessed URL: %s with method %s',
                Auth::user()->name,
                $request->fullUrl(),
                $request->method()
            );

            ActivityLog::create([
                'user_id' => Auth::id(),
                'activity' => $activity,
            ]);
        }

        return $response;
    }
}
