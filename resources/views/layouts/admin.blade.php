<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Panel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CDN for fast prototyping of admin -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#ea580c',
                        dark: '#111827',
                        light: '#f3f4f6',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-900 font-['Bricolage_Grotesque'] antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col justify-between hidden md:flex h-full">
        <div>
            <div class="h-16 flex items-center px-6 border-b border-gray-200">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center text-xl font-black uppercase tracking-widest text-black">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo" class="h-6 w-auto mr-3">
                    ADMIN
                </a>
            </div>
            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-lg hover:bg-black hover:text-white transition {{ request()->routeIs('admin.dashboard') ? 'bg-black text-white' : 'text-gray-600' }}">Dashboard</a>
                <a href="{{ route('admin.profile.index') }}" class="block px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-lg hover:bg-black hover:text-white transition {{ request()->routeIs('admin.profile.*') ? 'bg-black text-white' : 'text-gray-600' }}">Profile</a>
                <a href="{{ route('admin.experiences.index') }}" class="block px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-lg hover:bg-black hover:text-white transition {{ request()->routeIs('admin.experiences.*') ? 'bg-black text-white' : 'text-gray-600' }}">Experience</a>
                <a href="{{ route('admin.expertises.index') }}" class="block px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-lg hover:bg-black hover:text-white transition {{ request()->routeIs('admin.expertises.*') ? 'bg-black text-white' : 'text-gray-600' }}">Expertise</a>
                <a href="{{ route('admin.projects.index') }}" class="block px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-lg hover:bg-black hover:text-white transition {{ request()->routeIs('admin.projects.*') ? 'bg-black text-white' : 'text-gray-600' }}">Projects</a>
                <a href="{{ route('admin.certificates.index') }}" class="block px-4 py-2 text-sm font-bold uppercase tracking-wider rounded-lg hover:bg-black hover:text-white transition {{ request()->routeIs('admin.certificates.*') ? 'bg-black text-white' : 'text-gray-600' }}">Certificates</a>
            </nav>
        </div>
        
        <div class="p-4 border-t border-gray-200">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 text-sm font-black uppercase tracking-widest text-white bg-red-600 rounded-none border-2 border-transparent hover:bg-white hover:text-red-600 hover:border-red-600 transition shadow-[4px_4px_0px_0px_rgba(220,38,38,0.2)] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_rgba(220,38,38,0.2)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    <span>Log Out</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-full relative overflow-y-auto overflow-x-hidden">
        <!-- Header for mobile -->
        <header class="md:hidden bg-white h-16 border-b border-gray-200 flex items-center justify-between px-4 sticky top-0 z-10">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center text-lg font-black uppercase tracking-widest text-black">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo" class="h-5 w-auto mr-2">
                ADMIN
            </a>
            <!-- Mobile Menu Button (simplified) -->
            <a href="{{ route('admin.dashboard') }}" class="text-sm font-bold uppercase">Menu</a>
        </header>

        <main class="p-6 md:p-10 w-full max-w-6xl mx-auto">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
