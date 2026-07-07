<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings', [
            'user' => Auth::user(),
        ]);
    }

    public function updateUsername(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash', 'unique:users,username,' . $user->id],
        ]);

        $user->update([
            'username' => $request->username,
        ]);

        return back()->with('success', 'Username updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password updated successfully.');
    }
}
