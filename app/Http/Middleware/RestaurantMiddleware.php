<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RestaurantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    // public function handle(Request $request, Closure $next): Response
    // {
    //     // Check if user is logged in and using restaurant guard
    //     if (!Auth::guard('restaurant')->check()) {
    //         if ($request->expectsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Unauthorized. Restaurant access only.',
    //             ], 403);
    //         }
    //         return redirect()->route('restaurant.login');
    //     }

    //     // Ensure user is actually a restaurant owner
    //     if (Auth::guard('restaurant')->user()->role !== 'restaurant_owner') {
    //         Auth::guard('restaurant')->logout();
    //         if ($request->expectsJson() || $request->is('api/*')) {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Unauthorized. Restaurant access only.',
    //             ], 403);
    //         }
    //         return redirect()->route('restaurant.login')
    //             ->with('error', 'Unauthorized access attempt.');
    //     }

    //     return $next($request);
    // }

    // public function handle(Request $request, Closure $next): Response
    // {
    //     if ($request->is('api/*')) {
    //         if (!Auth::guard('restaurant-api')->check()) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Unauthorized. Restaurant access only.',
    //             ], 401);
    //         }

    //         if (Auth::guard('restaurant-api')->user()->role !== 'restaurant_owner') {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Unauthorized. Restaurant owner access only.',
    //             ], 403);
    //         }
    //     } else {
    //         // Keep your existing web middleware logic
    //         if (!Auth::guard('restaurant')->check()) {
    //             return redirect()->route('restaurant.login');
    //         }

    //         if (Auth::guard('restaurant')->user()->role !== 'restaurant_owner') {
    //             Auth::guard('restaurant')->logout();
    //             return redirect()->route('restaurant.login')
    //                 ->with('error', 'Unauthorized access attempt.');
    //         }
    //     }

    //     return $next($request);
    // }



    // public function handle(Request $request, Closure $next): Response
    // {
    //     if ($request->is('api/*')) {
    //         // 1. Check if user is authenticated with restaurant-api guard
    //         if (!Auth::guard('restaurant-api')->check()) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Unauthorized access.',
    //             ], 401);
    //         }

    //         $user = Auth::guard('restaurant-api')->user();
            
    //         // 2. Get the access token from the request
    //         $bearerToken = $request->bearerToken();
    //         if (!$bearerToken) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'No token provided.',
    //             ], 401);
    //         }

    //         // 3. Get the token from the database
    //         $token = $user->tokens->first(function ($token) use ($bearerToken) {
    //             return hash_equals($token->id, hash('sha256', $bearerToken));
    //         });

    //         // 4. Check token scopes
    //         if (!$token || !in_array('restaurant-access', json_decode($token->scopes))) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Invalid token scope for restaurant access.',
    //             ], 403);
    //         }

    //         // 5. Verify user role
    //         if ($user->role !== 'restaurant_owner') {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'This endpoint is restricted to restaurant owners only.',
    //             ], 403);
    //         }
    //     } else {
    //         // Web route handling
    //         if (!Auth::guard('restaurant')->check()) {
    //             return redirect()->route('restaurant.login');
    //         }

    //         if (Auth::guard('restaurant')->user()->role !== 'restaurant_owner') {
    //             Auth::guard('restaurant')->logout();
    //             return redirect()->route('restaurant.login')
    //                 ->with('error', 'Unauthorized access attempt.');
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('api/*')) {
            // Check if authenticated with restaurant-api guard
            if (!Auth::guard('restaurant-api')->check()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized. Please login as restaurant personnel.',
                ], 401);
            }

            // Simple role check
            $user = Auth::guard('restaurant-api')->user();
            if ($user->role !== 'restaurant_owner') {
                return response()->json([
                    'status' => false,
                    'message' => 'Access denied. restaurant personnel only.',
                ], 403);
            }

        } else {
            // Web routes
            if (!Auth::guard('restaurant')->check()) {
                return redirect()->route('restaurant.login');
            }

            if (Auth::guard('restaurant')->user()->role !== 'restaurant_owner') {
                Auth::guard('restaurant')->logout();
                return redirect()->route('restaurant.login')
                    ->with('error', 'Unauthorized access attempt.');
            }
        }

        return $next($request);
    }


}
