<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Title -->
    <title>Svei Portofolio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo.svg') }}" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/venobox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <!-- Tailwind CDN for development/prototype -->
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
                    keyframes: {
                        breathe: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' },
                        },
                        scrollY: {
                            '0%': { transform: 'translateY(0)' },
                            '100%': { transform: 'translateY(-100%)' },
                        }
                    },
                    animation: {
                        'breathe': 'breathe 10s ease-in-out infinite',
                        'scrollY': 'scrollY 15s linear infinite',
                    }
                }
            }
        }
    </script>

    @stack('styles')
</head>

<body class="@yield('body_class', 'bg-[#F8F8F5] text-black dark:bg-[#0A0A0A] dark:text-white transition-colors duration-300 font-[\'Bricolage_Grotesque\'] antialiased')">
    
    <x-front-navbar :social-links="$socialLinks" />

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/preline.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
