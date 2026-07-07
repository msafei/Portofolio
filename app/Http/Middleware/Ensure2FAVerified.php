<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Ensure2FAVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // If user has 2FA enabled and hasn't verified yet this session
        if ($user && $user->google2fa_secret && !session('2fa_verified')) {
            return redirect()->route('two-factor.challenge');
        }

        return $next($request);
    }
}
