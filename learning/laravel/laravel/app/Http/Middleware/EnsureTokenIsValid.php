<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('token') === 'my-scert-token') {
            return redirect('/home');
        }

        //  Middleware Parameters
        // if (!$request->user()->hasRole($role)) {
        //     //
        // }

        // return $next($request);

        // Middleware and responses

        $responses = $next($request);

        return $responses;
    }

    /**
     * Handle tasks after the response has been sent to the browser.
     */
    
    public function terminate(Request $request, Response $response): void
    {
        //
    }

    // example

    // change role of user
    // public function handle(Request $request, Closure $next)
    // {
    //     if (!auth()->check() || auth()->user()->role !== 'admin') {
    //         abort(403, 'Access denied.');
    //     }
    //     return $next($request);
    // }

    // change what time store is open or close
    // public function handle(Request $request, Closure $next)
    // {
    //     $isOpen = Cache::get('store_is_open', true);
    //     $hour = now()->hour;

    //     if (!$isOpen || $hour < 8 || $hour > 22) {
    //         return response()->json([
    //             'message' => 'Store is currently closed. Open 8am–10pm.'
    //         ], 503);
    //     }
    //     return $next($request);
    // }

    // set language of user
    // public function handle(Request $request, Closure $next)
    // {
    //     $locale = $request->user()?->locale
    //         ?? $request->getPreferredLanguage(['en', 'km', 'zh', 'fr'])
    //         ?? 'en';

    //     App::setLocale($locale);
    //     return $next($request);
    // }

    // records all admin for actions - who changed what and when.
    // public function handle(Request $request, Closure $next)
    // {
    //     $response = $next($request);

    //     if (auth()->check() && $request->isMethod('post', 'put', 'delete')) {
    //         ActivityLog::create([
    //             'user_id'    => auth()->id(),
    //             'action'     => $request->method() . ' ' . $request->path(),
    //             'ip_address' => $request->ip(),
    //             'user_agent' => $request->userAgent(),
    //             'created_at' => now(),
    //         ]);
    //     }
    //     return $response;
    // }

    // change chekout cart not empty
    // public function handle(Request $request, Closure $next)
    // {
    //     $cart = Cart::where('user_id', auth()->id())->first();

    //     if (!$cart || $cart->items()->count() === 0) {
    //         return redirect('/cart')
    //             ->with('error', 'Your cart is empty!');
    //     }
    //     return $next($request);
    // }
}
