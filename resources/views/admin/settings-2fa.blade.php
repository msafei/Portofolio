@extends('layouts.admin')

@section('content')
<div>
    <h1 class="text-3xl md:text-4xl font-black uppercase tracking-tighter mb-2">Enable Two-Factor Authentication</h1>
    <p class="text-gray-500 font-medium mb-10">Scan the QR code below with your Google Authenticator app, then enter the 6-digit code to confirm.</p>

    @if(session('error'))
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded font-bold">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white border border-gray-200 rounded-lg p-6 md:p-8 max-w-lg">
        <!-- Step 1: Scan QR Code -->
        <div class="mb-8">
            <h2 class="text-lg font-black uppercase tracking-wider mb-1">Step 1: Scan QR Code</h2>
            <p class="text-sm text-gray-500 mb-6">Open Google Authenticator on your phone and scan this QR code.</p>

            <div class="flex justify-center bg-white p-4 border-2 border-gray-200 rounded-lg">
                {!! $qrCodeSvg !!}
            </div>
        </div>

        <!-- Step 2: Manual Key -->
        <div class="mb-8">
            <h2 class="text-lg font-black uppercase tracking-wider mb-1">Step 2: Or Enter Key Manually</h2>
            <p class="text-sm text-gray-500 mb-3">If you can't scan the QR code, enter this key manually in your app.</p>

            <div class="bg-gray-100 border-2 border-gray-300 p-4 rounded font-mono text-lg font-bold tracking-widest text-center select-all break-all">
                {{ $secret }}
            </div>
        </div>

        <!-- Step 3: Verify -->
        <div>
            <h2 class="text-lg font-black uppercase tracking-wider mb-1">Step 3: Verify Code</h2>
            <p class="text-sm text-gray-500 mb-4">Enter the 6-digit code shown in Google Authenticator to confirm setup.</p>

            <form method="POST" action="{{ route('admin.settings.2fa.enable') }}">
                @csrf

                <div class="mb-4">
                    <input type="text" name="code" required autofocus
                        class="w-full border-2 border-gray-300 bg-white p-3 text-2xl font-black tracking-[0.4em] text-center focus:ring-0 focus:outline-none focus:border-black transition rounded"
                        placeholder="000000"
                        maxlength="6"
                        inputmode="numeric"
                        autocomplete="one-time-code"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    @error('code')
                        <p class="text-red-600 text-xs font-bold mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="flex-1 bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-gray-800 transition">
                        Enable 2FA
                    </button>
                    <a href="{{ route('admin.settings.index') }}" class="px-6 py-3 text-sm font-black uppercase tracking-widest border-2 border-gray-300 hover:border-black transition text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
