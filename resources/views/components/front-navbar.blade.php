@props(['socialLinks'])

<!-- Header (Desktop) -->
<header class="sticky top-0 z-50 bg-[#F8F8F5] dark:bg-[#0A0A0A] border-b-2 border-black dark:border-white hidden lg:block">
    <div class="flex items-center justify-between p-3 px-6 max-w-[1200px] mx-auto">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-2 text-xl font-semibold text-dark dark:text-white transition group/logo">
            <svg version="1.1" viewBox="0 0 2048 2048" class="h-9 w-9 grayscale group-hover/logo:grayscale-0 transition-all duration-300 group-hover/logo:scale-110" xmlns="http://www.w3.org/2000/svg">
                <path transform="translate(538,3)" d="m0 0h85l24 3 24 5 20 6 17 6 23 11 17 11 10 8 11 10 8 10 7 12 4 14v15l-6 26-24 95-17 67-7 28-6 14-7 10-10 10-14 10-15 8-25 9-18 4-24 3-49 2-27 3-26 5-25 7-18 8-11 7-10 8-7 7-8 13-8 21-6 23-4 25v39l3 13 5 10 9 10 10 9 10 7 20 12 19 11 17 9 33 15 28 12 4 1 16-8 29-14 40-17 20-8 29-11 38-13 54-16 35-9 50-11 43-8 51-7 40-4 45-3 28-1h62l47 2 58 5 48 6 36 6 36 7 41 9 41 11 36 12 22 10 20 11 12 8 12 9 13 11 14 14 10 13 9 16 4 11 2 9v12l-4 14-7 17-19 45-13 30-11 26-17 40-15 35-7 13-9 10-10 8-14 8-14 5-22 5-20 2h-19l-21-2-23-4-54-14-40-8-43-6-39-4-34-2h-66l-49 3-21 2 9 10 7 8 11 13 10 13 13 17 14 20 8 12 12 19 13 22 14 27 8 16 13 28 10 24 11 29 12 36 7 25 9 37 6 29 7 49 3 35 1 21v40l-2 29-6 42-7 34-9 33-12 36-11 28-12 27-15 29-14 23-10 15-12 17-14 18-11 13-9 11-15 16-24 24-8 7-15 13-16 13-19 14-20 14-18 11-16 10-24 13-16 8-23 11-26 11-36 13-21 7-29 8-41 9-41 7-30 4h-115l-53-8-38-8-33-9-32-11-32-13-34-16-24-13-23-14-19-13-18-13-18-14-10-8-10-9-12-11-26-26-9-11-10-11-10-13-9-12-14-20-12-19-14-24-10-19-9-20-12-29-12-35-8-28-8-38-5-35-1-9v-135l6-41 8-37 8-31 12-39 8-23 11-28 9-21 8-18 8-16 13-25 13-23 9-15 8-13 12-19 8-11 10-15 15-20 10-13 13-16 9-10 7-8 9-10 7-9 3-3-34-26-14-12-8-7-11-10-8-7-11-11-7-8-11-12-8-10-10-13-7-10-10-15-11-19-8-14-11-24-10-26-9-27-9-37-6-36-3-34v-65l3-39 5-35 5-26 9-38 10-33 12-30 10-23 7-15 12-22 15-23 18-27 9-12 12-13 8-9 24-24 6-7 8-7 16-13 15-11 13-9 15-10 20-12 16-9 17-9 24-11 23-9 33-11 39-10 33-7 30-5 36-4zm65 1123-17 14-11 10-8 7-10 9-4 3v2l-4 2-20 20v2h-2l-7 8-11 12-9 11-10 12-14 19-8 12-9 14-9 15-13 24-12 23-10 23-10 30-5 21-5 30-2 22 1 21 3 22 5 19 9 21 10 19 13 18 13 14 11 9 8 6 19 11 17 8 22 7 14 3 29 3h36l21-2 19-3 27-7 26-10 25-12 18-11 14-10 13-11 10-9 7-8 11-13 11-17 7-16 6-18 5-22 2-17v-27l-3-25-5-29-7-25-9-26-10-24-9-19-11-19-11-17-12-16-8-10-11-12-9-10-16-15-11-9-15-12-17-12-20-13-22-13-12-7z" fill="currentColor"/>
                <path transform="translate(1834,717)" d="m0 0 28 2 21 4 26 8 21 9 16 9 16 11 10 8 12 11 13 13 8 10 10 14 12 21 7 15 8 24 4 18 2 12v58l-5 26-6 20-6 15-12 23-10 15-9 11-11 13-16 15-13 10-17 11-21 11-27 10-20 5-22 3h-43l-22-3-25-7-25-10-17-9-18-12-16-13-20-20-13-17-10-15-8-16-8-18-8-26-4-22-1-9v-41l4-25 6-21 6-17 12-25 10-15 8-11 11-13 16-16 10-8 14-10 20-12 23-10 26-8 20-4 10-1z" fill="#FEA201"/>
            </svg>
        </a>

        <!-- Navigation menu -->
        <ul class="flex-1 flex items-center justify-center gap-6 font-bold uppercase tracking-widest text-[11px]">
            <li>
                <a href="{{ route('home') }}" class="hover:underline underline-offset-4 decoration-2 {{ request()->routeIs('home') ? 'underline' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('portfolio.index') }}" class="hover:underline underline-offset-4 decoration-2 {{ request()->routeIs('portfolio.*') ? 'underline' : '' }}">Portfolio</a>
            </li>
            <li>
                <a href="#" class="hover:underline underline-offset-4 decoration-2">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline underline-offset-4 decoration-2">Contact</a>
            </li>
        </ul>

        <!-- Right Actions -->
        <div class="flex items-center gap-3">
            <!-- Social Icons (Desktop) -->
            <div class="hidden xl:flex items-center gap-3 mr-2 border-r-2 border-black/20 dark:border-white/20 pr-5">
                @foreach($socialLinks as $link)
                    @if($link->svg_icon)
                        <a href="{{ $link->url }}" target="_blank" class="text-black hover:opacity-50 dark:text-white transition">
                            {!! $link->svg_icon !!}
                        </a>
                    @endif
                @endforeach
            </div>

            <!-- Theme appearance toggler -->
            <button type="button" class="hs-dark-mode group flex h-8 w-8 items-center justify-center border-2 border-black text-black transition hover:bg-black hover:text-white hs-dark-mode-active:hidden" data-hs-theme-click-value="dark">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M11.8 3a8.656 8.656 0 0 0-4.523 1.28A8.918 8.918 0 0 0 4.04 7.756a9.167 9.167 0 0 0 .44 9.24 8.863 8.863 0 0 0 3.553 3.137 8.633 8.633 0 0 0 4.624.824 8.69 8.69 0 0 0 4.381-1.723 8.973 8.973 0 0 0 2.892-3.78c.3-.738-.419-1.48-1.142-1.179a5.604 5.604 0 0 1-3.892.15 5.74 5.74 0 0 1-3.083-2.431 5.956 5.956 0 0 1-.848-3.886c.17-1.357.8-2.61 1.78-3.541l.069-.072c.485-.567.099-1.488-.668-1.488h-.234l-.06-.005L11.8 3Z" /></svg>
            </button>
            <button type="button" class="hs-dark-mode group hidden h-8 w-8 items-center justify-center border-2 border-white text-white transition hover:bg-white hover:text-black hs-dark-mode-active:flex" data-hs-theme-click-value="light">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" class="h-4 w-4"><path d="M10 15.833a.833.833 0 0 1 .828.736l.005.098v.833a.833.833 0 0 1-1.66.097l-.006-.097v-.833a.833.833 0 0 1 .833-.834Zm5.26-1.741.08.069.582.583a.833.833 0 0 1-1.1 1.248l-.078-.07-.583-.583a.833.833 0 0 1 1.015-1.306l.085.059Zm-9.42.068a.833.833 0 0 1 .068 1.1l-.069.08-.583.582a.833.833 0 0 1-1.248-1.1l.07-.078.583-.583a.833.833 0 0 1 1.178 0ZM3.333 9.167a.833.833 0 0 1 .098 1.66l-.098.006H2.5a.833.833 0 0 1-.098-1.66l.098-.006h.833Zm14.167 0a.833.833 0 0 1 .098 1.66l-.098.006h-.833a.833.833 0 0 1-.098-1.66l.098-.006h.833ZM5.178 4.008l.078.07.583.583a.833.833 0 0 1-1.1 1.247l-.078-.069-.583-.583A.833.833 0 0 1 5.092 3.95l.086.058Zm10.744.069a.833.833 0 0 1 .07 1.1l-.07.079-.583.583a.833.833 0 0 1-1.247-1.1l.069-.078.583-.584a.833.833 0 0 1 1.178 0ZM10 1.667a.833.833 0 0 1 .828.736l.005.097v.833a.833.833 0 0 1-1.66.098l-.006-.098V2.5A.833.833 0 0 1 10 1.667Zm0 4.166a4.167 4.167 0 1 1-4.163 4.348L5.833 10l.004-.18A4.167 4.167 0 0 1 10 5.832Z" /></svg>
            </button>

            <a href="#" class="bg-black text-white dark:bg-white dark:text-black px-4 py-1.5 text-xs font-black uppercase tracking-widest hover:invert transition">Let's Talk</a>
        </div>
    </div>
</header>

<!-- Mobile Top Bar -->
<header class="lg:hidden flex items-center justify-between p-3 px-4 border-b-2 border-black dark:border-white sticky top-0 z-50 bg-[#F8F8F5] dark:bg-[#0A0A0A]">
    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-2 text-xl font-semibold text-dark dark:text-white transition group/logo">
        <svg version="1.1" viewBox="0 0 2048 2048" class="h-8 w-8 grayscale group-hover/logo:grayscale-0 transition-all duration-300 group-hover/logo:scale-110" xmlns="http://www.w3.org/2000/svg">
            <path transform="translate(538,3)" d="m0 0h85l24 3 24 5 20 6 17 6 23 11 17 11 10 8 11 10 8 10 7 12 4 14v15l-6 26-24 95-17 67-7 28-6 14-7 10-10 10-14 10-15 8-25 9-18 4-24 3-49 2-27 3-26 5-25 7-18 8-11 7-10 8-7 7-8 13-8 21-6 23-4 25v39l3 13 5 10 9 10 10 9 10 7 20 12 19 11 17 9 33 15 28 12 4 1 16-8 29-14 40-17 20-8 29-11 38-13 54-16 35-9 50-11 43-8 51-7 40-4 45-3 28-1h62l47 2 58 5 48 6 36 6 36 7 41 9 41 11 36 12 22 10 20 11 12 8 12 9 13 11 14 14 10 13 9 16 4 11 2 9v12l-4 14-7 17-19 45-13 30-11 26-17 40-15 35-7 13-9 10-10 8-14 8-14 5-22 5-20 2h-19l-21-2-23-4-54-14-40-8-43-6-39-4-34-2h-66l-49 3-21 2 9 10 7 8 11 13 10 13 13 17 14 20 8 12 12 19 13 22 14 27 8 16 13 28 10 24 11 29 12 36 7 25 9 37 6 29 7 49 3 35 1 21v40l-2 29-6 42-7 34-9 33-12 36-11 28-12 27-15 29-14 23-10 15-12 17-14 18-11 13-9 11-15 16-24 24-8 7-15 13-16 13-19 14-20 14-18 11-16 10-24 13-16 8-23 11-26 11-36 13-21 7-29 8-41 9-41 7-30 4h-115l-53-8-38-8-33-9-32-11-32-13-34-16-24-13-23-14-19-13-18-13-18-14-10-8-10-9-12-11-26-26-9-11-10-11-10-13-9-12-14-20-12-19-14-24-10-19-9-20-12-29-12-35-8-28-8-38-5-35-1-9v-135l6-41 8-37 8-31 12-39 8-23 11-28 9-21 8-18 8-16 13-25 13-23 9-15 8-13 12-19 8-11 10-15 15-20 10-13 13-16 9-10 7-8 9-10 7-9 3-3-34-26-14-12-8-7-11-10-8-7-11-11-7-8-11-12-8-10-10-13-7-10-10-15-11-19-8-14-11-24-10-26-9-27-9-37-6-36-3-34v-65l3-39 5-35 5-26 9-38 10-33 12-30 10-23 7-15 12-22 15-23 18-27 9-12 12-13 8-9 24-24 6-7 8-7 16-13 15-11 13-9 15-10 20-12 16-9 17-9 24-11 23-9 33-11 39-10 33-7 30-5 36-4zm65 1123-17 14-11 10-8 7-10 9-4 3v2l-4 2-20 20v2h-2l-7 8-11 12-9 11-10 12-14 19-8 12-9 14-9 15-13 24-12 23-10 23-10 30-5 21-5 30-2 22 1 21 3 22 5 19 9 21 10 19 13 18 13 14 11 9 8 6 19 11 17 8 22 7 14 3 29 3h36l21-2 19-3 27-7 26-10 25-12 18-11 14-10 13-11 10-9 7-8 11-13 11-17 7-16 6-18 5-22 2-17v-27l-3-25-5-29-7-25-9-26-10-24-9-19-11-19-11-17-12-16-8-10-11-12-9-10-16-15-11-9-15-12-17-12-20-13-22-13-12-7z" fill="currentColor"/>
            <path transform="translate(1834,717)" d="m0 0 28 2 21 4 26 8 21 9 16 9 16 11 10 8 12 11 13 13 8 10 10 14 12 21 7 15 8 24 4 18 2 12v58l-5 26-6 20-6 15-12 23-10 15-9 11-11 13-16 15-13 10-17 11-21 11-27 10-20 5-22 3h-43l-22-3-25-7-25-10-17-9-18-12-16-13-20-20-13-17-10-15-8-16-8-18-8-26-4-22-1-9v-41l4-25 6-21 6-17 12-25 10-15 8-11 11-13 16-16 10-8 14-10 20-12 23-10 26-8 20-4 10-1z" fill="#FEA201"/>
        </svg>
    </a>
    
    <!-- Hamburger Button -->
    <button type="button" class="flex justify-center items-center h-10 w-10 border-2 border-black dark:border-white text-black dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition" data-hs-overlay="#mobile-sidebar">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
</header>

<!-- Mobile Sidebar Overlay -->
<div id="mobile-sidebar" class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-[85%] z-[80] bg-[#F8F8F5] dark:bg-[#0A0A0A] border-l-4 border-black dark:border-white flex flex-col justify-between">
    <div class="p-6">
        <div class="flex justify-between items-center border-b-4 border-black dark:border-white pb-4 mb-8">
            <h3 class="font-black text-2xl uppercase tracking-tighter">Menu</h3>
            <button type="button" class="text-black dark:text-white hover:opacity-70 transition border-2 border-black dark:border-white p-1" data-hs-overlay="#mobile-sidebar">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        
        <nav class="flex flex-col gap-6 text-xl font-black tracking-widest uppercase">
            <a href="{{ route('home') }}" class="border-b-2 border-black dark:border-white pb-4 flex items-center justify-between group {{ request()->routeIs('home') ? 'opacity-50 pointer-events-none' : '' }}">
                <span>Home</span>
                <svg class="w-7 h-7 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="{{ route('portfolio.index') }}" class="border-b-2 border-black dark:border-white pb-4 flex items-center justify-between group {{ request()->routeIs('portfolio.*') ? 'opacity-50 pointer-events-none' : '' }}">
                <span>Portfolio</span>
                <svg class="w-7 h-7 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#" class="border-b-2 border-black dark:border-white pb-4 flex items-center justify-between group">
                <span>About</span>
                <svg class="w-7 h-7 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#" class="border-b-2 border-black dark:border-white pb-4 flex items-center justify-between group">
                <span>Contact</span>
                <svg class="w-7 h-7 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </nav>
    </div>
    
    <div class="p-6 border-t-4 border-black dark:border-white">
        <!-- Theme Toggle -->
        <div class="flex items-center justify-between mb-8">
            <span class="font-black uppercase tracking-widest text-sm">Theme</span>
            <!-- Light mode button: shown when in light mode, click switches to dark -->
            <button id="sidebar-theme-to-dark" type="button" class="hs-dark-mode flex h-10 w-10 items-center justify-center border-2 border-black dark:border-white text-black dark:text-white transition hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black hs-dark-mode-active:hidden" data-hs-theme-click-value="dark">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5"><path d="M11.8 3a8.656 8.656 0 0 0-4.523 1.28A8.918 8.918 0 0 0 4.04 7.756a9.167 9.167 0 0 0 .44 9.24 8.863 8.863 0 0 0 3.553 3.137 8.633 8.633 0 0 0 4.624.824 8.69 8.69 0 0 0 4.381-1.723 8.973 8.973 0 0 0 2.892-3.78c.3-.738-.419-1.48-1.142-1.179a5.604 5.604 0 0 1-3.892.15 5.74 5.74 0 0 1-3.083-2.431 5.956 5.956 0 0 1-.848-3.886c.17-1.357.8-2.61 1.78-3.541l.069-.072c.485-.567.099-1.488-.668-1.488h-.234l-.06-.005L11.8 3Z" /></svg>
            </button>
            <!-- Dark mode button: shown when in dark mode, click switches to light -->
            <button id="sidebar-theme-to-light" type="button" class="hs-dark-mode hidden h-10 w-10 items-center justify-center border-2 border-black dark:border-white text-black dark:text-white transition hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black hs-dark-mode-active:flex" data-hs-theme-click-value="light">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="h-5 w-5"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
            </button>
        </div>
        
        <!-- Social Icons -->
        <div class="flex justify-between items-center gap-4">
            @foreach($socialLinks as $link)
                @if($link->svg_icon)
                    <a href="{{ $link->url }}" target="_blank" class="flex-1 flex justify-center py-3 border-2 border-black dark:border-white text-black dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">
                        {!! str_replace('w-[18px] h-[18px]', 'w-5 h-5', $link->svg_icon) !!}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</div>
