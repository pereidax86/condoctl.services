<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AuditLog;

class AuditLogsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (in_array($request->method(), ['POST', 'PUT', 'DELETE'])) {
            $user = auth()->user();
            AuditLog::create([
                'user_id' => $user ? $user->id : null,
                'email' => $user ? $user->email : null,
                'action' => $request->method(),
                'route' => $request->path(),
                'data' => $request->except(['password', 'password_confirmation']),
            ]);
        }

        return $response;
    }
}
