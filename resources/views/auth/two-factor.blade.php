<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Two-Factor Authentication - Svei Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800;12..96,900&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo.svg') }}" type="image/svg+xml">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ea580c',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-[#F8F8F5] text-black font-['Bricolage_Grotesque'] h-screen overflow-hidden antialiased selection:bg-black selection:text-white">
    
    <div class="flex h-full w-full">
        <!-- Left Side: Aesthetic Typography -->
        <div class="hidden lg:flex w-1/2 bg-black text-white flex-col justify-between p-12 border-r-4 border-black relative overflow-hidden">
            <!-- Decorative Shapes -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-[120px] opacity-20 -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full blur-[120px] opacity-10 translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative z-10">
                <a href="{{ route('home') }}" class="text-2xl font-black uppercase tracking-widest inline-flex items-center gap-2 hover:opacity-70 transition">
                    &larr; Back to Site
                </a>
            </div>

            <div class="relative z-10">
                <h1 class="text-7xl xl:text-[100px] font-black uppercase tracking-tighter leading-none mb-6">
                    Security<br>Check
                </h1>
                <p class="text-xl font-medium opacity-80 max-w-md">
                    Enter the 6-digit code from your Google Authenticator app to complete login.
                </p>
            </div>
            
            <div class="relative z-10 font-bold uppercase tracking-widest text-xs opacity-50 flex justify-between w-full">
                <span>2FA ENABLED</span>
                <span>TOTP VERIFICATION</span>
            </div>
        </div>

        <!-- Right Side: 2FA Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative">
            <div class="w-full max-w-md">
                
                <div class="mb-10 text-center lg:text-left">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto lg:mx-0 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-2">Verify Identity</h2>
                    <p class="text-sm font-medium text-gray-500">Open Google Authenticator and enter the 6-digit verification code.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-4 text-sm font-bold text-red-600 bg-red-100 p-4 border-2 border-red-600 rounded">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('two-factor.verify') }}" class="space-y-6">
                    @csrf

                    <!-- OTP Code -->
                    <div>
                        <label for="code" class="block text-sm font-black uppercase tracking-widest mb-2">Verification Code</label>
                        <input id="code" 
                            class="w-full border-4 border-black bg-transparent p-4 text-3xl font-black tracking-[0.5em] text-center focus:ring-0 focus:outline-none focus:border-primary transition" 
                            type="text" 
                            name="code" 
                            required 
                            autofocus 
                            autocomplete="one-time-code" 
                            inputmode="numeric" 
                            maxlength="6" 
                            placeholder="000000"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-black text-white text-lg font-black uppercase tracking-widest py-4 border-4 border-black hover:bg-transparent hover:text-black transition shadow-[6px_6px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[8px_8px_0px_0px_#ea580c]">
                            Verify &rarr;
                        </button>
                    </div>
                </form>

                <div class="mt-8 text-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-xs font-bold uppercase tracking-widest text-gray-400 hover:text-red-600 transition underline underline-offset-4">
                            Cancel &amp; Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
