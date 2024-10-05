<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class NonUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
        $user = Auth::user();
        
        // Log the user's role for debugging
        \Log::info('User role: ' . $user->role);

        switch ($user->role) {
            case 'Super Admin':
                return redirect('/Superad');
            case 'Admin':
                return redirect('/Admin');
            case 'Front Desk':
                return redirect('/Front');
            case 'Human Resources':
                return redirect('/HR');
            case 'Nurse':
                return redirect('/Nurse');
            case 'Doctor':
                return redirect('/Doc');
            case 'Normal User':
                return redirect('/User');
            case 'Guests':
                return redirect('/Guests');
            default:
                return redirect('/dashboard'); // Fallback for any unrecognized role
        }
    }
        return $next($request);
    }
}