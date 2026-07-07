@extends('layouts.admin')

@section('content')
<div>
    <h1 class="text-3xl md:text-4xl font-black uppercase tracking-tighter mb-2">Account Settings</h1>
    <p class="text-gray-500 font-medium mb-10">Manage your username and password.</p>

    <div class="space-y-8">
        <!-- Update Username -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 md:p-8">
            <h2 class="text-xl font-black uppercase tracking-wider mb-1">Change Username</h2>
            <p class="text-sm text-gray-500 mb-6">This is the username you use to log in to the admin panel.</p>

            <form method="POST" action="{{ route('admin.settings.username') }}">
                @csrf
                @method('PUT')

                <div class="max-w-md">
                    <label for="username" class="block text-sm font-black uppercase tracking-widest mb-2">Username</label>
                    <input id="username" type="text" name="username" value="{{ old('username', $user->username) }}" required
                        class="w-full border-2 border-gray-300 bg-white p-3 text-base font-medium focus:ring-0 focus:outline-none focus:border-black transition rounded"
                        placeholder="Enter your username">
                    @error('username')
                        <p class="text-red-600 text-xs font-bold mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-gray-800 transition">
                        Update Username
                    </button>
                </div>
            </form>
        </div>

        <!-- Update Password -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 md:p-8">
            <h2 class="text-xl font-black uppercase tracking-wider mb-1">Change Password</h2>
            <p class="text-sm text-gray-500 mb-6">Make sure to use a strong, unique password.</p>

            <form method="POST" action="{{ route('admin.settings.password') }}">
                @csrf
                @method('PUT')

                <div class="space-y-4 max-w-md">
                    <div>
                        <label for="current_password" class="block text-sm font-black uppercase tracking-widest mb-2">Current Password</label>
                        <input id="current_password" type="password" name="current_password" required
                            class="w-full border-2 border-gray-300 bg-white p-3 text-base font-medium focus:ring-0 focus:outline-none focus:border-black transition rounded"
                            placeholder="••••••••">
                        @error('current_password')
                            <p class="text-red-600 text-xs font-bold mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-black uppercase tracking-widest mb-2">New Password</label>
                        <input id="password" type="password" name="password" required
                            class="w-full border-2 border-gray-300 bg-white p-3 text-base font-medium focus:ring-0 focus:outline-none focus:border-black transition rounded"
                            placeholder="••••••••">
                        @error('password')
                            <p class="text-red-600 text-xs font-bold mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-black uppercase tracking-widest mb-2">Confirm New Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            class="w-full border-2 border-gray-300 bg-white p-3 text-base font-medium focus:ring-0 focus:outline-none focus:border-black transition rounded"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-gray-800 transition">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
        <!-- Two-Factor Authentication -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 md:p-8">
            <h2 class="text-xl font-black uppercase tracking-wider mb-1">Two-Factor Authentication (2FA)</h2>
            <p class="text-sm text-gray-500 mb-6">Add an extra layer of security to your account using Google Authenticator.</p>

            @if($user->google2fa_secret)
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <p class="font-bold uppercase tracking-widest text-sm">2FA is currently ENABLED.</p>
                        <p class="text-xs mt-1">Your account is secured with two-factor authentication.</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin.settings.2fa.disable') }}" class="max-w-md border-t-2 border-gray-100 pt-6 mt-6">
                    @csrf
                    @method('DELETE')
                    <p class="text-sm font-bold uppercase tracking-widest mb-4">Disable 2FA</p>
                    <div class="mb-4">
                        <label for="disable_password" class="block text-xs font-bold text-gray-600 uppercase tracking-widest mb-2">Confirm Password</label>
                        <input id="disable_password" type="password" name="current_password" required
                            class="w-full border-2 border-gray-300 bg-white p-3 text-base font-medium focus:ring-0 focus:outline-none focus:border-black transition rounded"
                            placeholder="••••••••">
                        @error('current_password')
                            <p class="text-red-600 text-xs font-bold mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-red-600 text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-red-700 transition" onclick="return confirm('Are you sure you want to disable 2FA? This will reduce your account security.')">
                        Disable 2FA
                    </button>
                </form>
            @else
                <div class="mb-6 p-4 bg-yellow-100 border border-yellow-400 text-yellow-800 rounded flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <div>
                        <p class="font-bold uppercase tracking-widest text-sm">2FA is currently DISABLED.</p>
                        <p class="text-xs mt-1">We highly recommend enabling 2FA to secure your admin account.</p>
                    </div>
                </div>

                <a href="{{ route('admin.settings.2fa.setup') }}" class="inline-block bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-gray-800 transition">
                    Set Up 2FA
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
