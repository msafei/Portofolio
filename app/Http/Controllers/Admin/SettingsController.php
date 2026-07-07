<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use PragmaRX\Google2FA\Google2FA;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

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

    /**
     * Show 2FA setup page with QR code.
     */
    public function setup2FA()
    {
        $user = Auth::user();
        $google2fa = new Google2FA();

        // Generate a new secret
        $secret = $google2fa->generateSecretKey();

        // Store secret temporarily in session until user confirms
        session(['2fa_secret_temp' => $secret]);

        // Generate QR code URL
        $qrCodeUrl = $google2fa->getQRCodeUrl(
            'Svei Portofolio',
            $user->username,
            $secret
        );

        // Generate QR code SVG
        $renderer = new ImageRenderer(
            new RendererStyle(250),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $qrCodeSvg = $writer->writeString($qrCodeUrl);

        return view('admin.settings-2fa', [
            'user' => $user,
            'secret' => $secret,
            'qrCodeSvg' => $qrCodeSvg,
        ]);
    }

    /**
     * Enable 2FA after verifying the code.
     */
    public function enable2FA(Request $request)
    {
        $request->validate([
            'code' => ['required', 'string', 'size:6'],
        ]);

        $secret = session('2fa_secret_temp');

        if (!$secret) {
            return redirect()->route('admin.settings.index')->with('error', 'Session expired. Please try again.');
        }

        $google2fa = new Google2FA();
        $valid = $google2fa->verifyKey($secret, $request->code);

        if (!$valid) {
            return back()->with('error', 'Invalid verification code. Please scan the QR code again and enter a valid code.');
        }

        // Save secret to database
        Auth::user()->update(['google2fa_secret' => $secret]);

        // Mark as verified for this session
        session(['2fa_verified' => true]);
        session()->forget('2fa_secret_temp');

        return redirect()->route('admin.settings.index')->with('success', 'Two-Factor Authentication has been enabled successfully!');
    }

    /**
     * Disable 2FA.
     */
    public function disable2FA(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
        ]);

        Auth::user()->update(['google2fa_secret' => null]);
        session()->forget('2fa_verified');

        return redirect()->route('admin.settings.index')->with('success', 'Two-Factor Authentication has been disabled.');
    }
}
