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
    </div>
</div>
@endsection
