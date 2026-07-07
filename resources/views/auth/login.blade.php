<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Svei Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800;12..96,900&display=swap" rel="stylesheet" />

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
        <!-- Left Side: Aesthetic Typography / Graphic -->
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
                    Command<br>Center
                </h1>
                <p class="text-xl font-medium opacity-80 max-w-md">
                    Secure access portal for Muhamad Safei's portfolio and project management system.
                </p>
            </div>
            
            <div class="relative z-10 font-bold uppercase tracking-widest text-xs opacity-50 flex justify-between w-full">
                <span>EST. 2026</span>
                <span>SYSTEM VERSION 1.0</span>
            </div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative">
            <div class="w-full max-w-md">
                
                <div class="mb-10 text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-2">Welcome Back</h2>
                    <p class="text-sm font-medium text-gray-500">Please enter your credentials to access the admin panel.</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-sm font-bold text-green-600 bg-green-100 p-4 border-2 border-green-600 rounded">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Username -->
                    <div>
                        <label for="username" class="block text-sm font-black uppercase tracking-widest mb-2">Username</label>
                        <input id="username" class="w-full border-4 border-black bg-transparent p-4 text-lg font-medium focus:ring-0 focus:outline-none focus:border-primary transition" type="text" name="username" value="{{ old('username') }}" required autofocus autocomplete="username" placeholder="admin">
                        @error('username')
                            <p class="text-red-600 text-xs font-bold mt-2 uppercase tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block text-sm font-black uppercase tracking-widest">Password</label>
                        </div>
                        <input id="password" class="w-full border-4 border-black bg-transparent p-4 text-lg font-medium focus:ring-0 focus:outline-none focus:border-primary transition" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
                        @error('password')
                            <p class="text-red-600 text-xs font-bold mt-2 uppercase tracking-widest">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                            <input id="remember_me" type="checkbox" class="w-5 h-5 border-2 border-black text-black focus:ring-black rounded-none transition" name="remember">
                            <span class="ms-2 text-xs font-bold uppercase tracking-widest group-hover:text-primary transition">Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-xs font-bold uppercase tracking-widest hover:text-primary transition underline underline-offset-4" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full bg-black text-white text-lg font-black uppercase tracking-widest py-4 border-4 border-black hover:bg-transparent hover:text-black transition shadow-[6px_6px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[8px_8px_0px_0px_#ea580c]">
                            Authenticate &rarr;
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
