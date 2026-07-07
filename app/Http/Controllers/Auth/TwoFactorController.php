<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{
    /**
     * Show the 2FA challenge form.
     */
    public function create()
    {
        // If user doesn't have 2FA enabled, skip
        if (!auth()->user()->google2fa_secret) {
            return redirect()->route('admin.dashboard');
        }

        // If already verified, skip
        if (session('2fa_verified')) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.two-factor');
    }

    /**
     * Verify the 2FA code.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required', 'string', 'size:6'],
        ]);

        $google2fa = new Google2FA();
        $user = auth()->user();

        $valid = $google2fa->verifyKey($user->google2fa_secret, $request->code);

        if ($valid) {
            session(['2fa_verified' => true]);
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['code' => 'The verification code is invalid. Please try again.']);
    }
}
