<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Notifications\OrderConfirmed;

class SendDashboardNotification
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user) {
            $user->notify(new OrderConfirmed());
        }

        return $next($request);
    }
}