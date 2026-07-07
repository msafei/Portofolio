<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Title -->
    <title>Svei Portofolio - Magazine Edition</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.svg" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800;12..96,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/venobox.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />

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
</head>

<body class="relative bg-[#F8F8F5] text-dark dark:bg-[#0A0A0A] dark:text-light font-sans selection:bg-black selection:text-white dark:selection:bg-white dark:selection:text-black overflow-x-hidden">
    
    <div class="mx-auto max-w-[1200px] px-4 lg:px-6 pb-6">
        
        <?php include './navbar/navbar.php'; ?>

        <!-- Magazine Header -->
        <header class="mt-4 mb-4 border-b-2 border-black dark:border-white pb-3 md:pb-4 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-black uppercase tracking-tighter leading-none text-black dark:text-white">
                Muhamad Safei
            </h1>
            <div class="mt-3 md:mt-4 flex flex-col md:flex-row justify-between items-center text-[10px] md:text-xs font-bold uppercase tracking-widest border-t-2 border-black dark:border-white pt-2 gap-2">
                <span>Vol. 1 — The Portofolio</span>
                <span>Full Stack Developer & Product Designer</span>
                <span>Est. 2020</span>
            </div>
        </header>

        <!-- Main Magazine Grid -->
        <main class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-0 lg:divide-x-2 divide-black dark:divide-white border-b-2 border-black dark:border-white pb-6 lg:pb-0">

            <!-- LEFT COLUMN: Profile + Expertise (3/12 on desktop) -->
            <div class="lg:col-span-3 lg:pr-6 flex flex-col gap-6 lg:py-6">
                <!-- Profile -->
                <section>
                    <h2 class="text-2xl font-black uppercase border-b-2 border-black dark:border-white pb-1 mb-3">Profile</h2>
                    <p class="text-sm leading-relaxed font-medium">
                        I'm a <span class="bg-black text-white dark:bg-white dark:text-black px-1 font-bold">Full Stack Developer</span> with <span id="experience-years"></span> years of experience and a <span class="bg-black text-white dark:bg-white dark:text-black px-1 font-bold">Product Designer</span> with 1 year of experience. I bridge the gap between aesthetic design and robust engineering.
                    </p>
                    <div class="mt-6 flex flex-col gap-2">
                        <a href="/assets/doc/cv.pdf" download="CV Muhamad Safei.pdf" class="w-full text-center border-2 border-black dark:border-white py-2 text-sm font-bold uppercase tracking-widest hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition duration-300">Download CV</a>
                        <button type="button" data-clipboard-text="msafei.ti@gmail.com" class="js-clipboard w-full text-center border-2 border-black dark:border-white py-2 text-sm font-bold uppercase tracking-widest hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition duration-300 relative">
                            Copy Email
                            <span class="hs-tooltip-content invisible z-10 hidden rounded bg-black px-2 py-1 text-[10px] font-medium text-white opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-white dark:text-black absolute -top-8 left-1/2 -translate-x-1/2">Copied!</span>
                        </button>
                    </div>
                </section>

                <!-- MOBILE ONLY: Video shown between Profile & Expertise -->
                <figure class="lg:hidden group relative overflow-hidden border-2 border-black dark:border-white w-full aspect-[4/3]">
                    <video
                        src="assets/vidio/me.mp4"
                        class="w-full h-full object-cover object-center grayscale group-hover:grayscale-0 transition duration-700"
                        autoplay loop muted playsinline
                    ></video>
                    <div class="absolute bottom-0 left-0 bg-black text-white dark:bg-white dark:text-black p-3 m-3 border border-white/20 dark:border-black/20 backdrop-blur-md">
                        <h3 class="text-base font-black uppercase tracking-tighter">The Visionary</h3>
                        <p class="text-xs font-medium opacity-80 uppercase tracking-widest mt-1">Self Portrait, 2026</p>
                    </div>
                </figure>

                <!-- Expertise -->
                <section>
                    <h2 class="text-2xl font-black uppercase border-b-2 border-black dark:border-white pb-1 mb-3">Expertise</h2>
                    <div id="expertise-scroll" class="max-h-[300px] lg:max-h-[400px] overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                        <div id="expertise-list" class="flex flex-col gap-3 py-1">
                            <article onclick="openModal('Figma', 'Expertise', 'UI/UX Design Tool', 'assets/img/expertise/figma.svg', 'Figma is my primary tool for designing interfaces, creating interactive prototypes, and collaborating with stakeholders.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">01</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Figma</h3>
                                    <p class="text-xs font-medium italic opacity-80">UI/UX Design Tool</p>
                                </div>
                                <img src="assets/img/expertise/figma.svg" alt="Figma" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                            <article onclick="openModal('Zeplin', 'Expertise', 'Handoff Tool', 'assets/img/expertise/zeplin.svg', 'Zeplin is used to handoff designs and style guides with accurate specs, assets, and code snippets.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">02</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Zeplin</h3>
                                    <p class="text-xs font-medium italic opacity-80">Handoff Tool</p>
                                </div>
                                <img src="assets/img/expertise/zeplin.svg" alt="Zeplin" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                            <article onclick="openModal('Laravel', 'Expertise', 'PHP Framework', 'assets/img/expertise/laravel.svg', 'Laravel allows me to build robust, scalable, and secure backend systems and APIs with elegant syntax.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">03</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Laravel</h3>
                                    <p class="text-xs font-medium italic opacity-80">PHP Framework</p>
                                </div>
                                <img src="assets/img/expertise/laravel.svg" alt="Laravel" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                            <article onclick="openModal('Flutter', 'Expertise', 'Mobile Framework', 'assets/img/expertise/flutter.svg', 'Using Flutter, I create natively compiled multi-platform applications from a single codebase.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">04</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Flutter</h3>
                                    <p class="text-xs font-medium italic opacity-80">Mobile Framework</p>
                                </div>
                                <img src="assets/img/expertise/flutter.svg" alt="Flutter" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                            <article onclick="openModal('Webflow', 'Expertise', 'No-code Web Design', 'assets/img/expertise/webflow.svg', 'Webflow empowers me to design, build, and launch responsive websites visually and extremely fast.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">05</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Webflow</h3>
                                    <p class="text-xs font-medium italic opacity-80">No-code Web Design</p>
                                </div>
                                <img src="assets/img/expertise/webflow.svg" alt="Webflow" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                            <article onclick="openModal('Mikrotik', 'Expertise', 'Network Administration', 'assets/img/expertise/mikrotik.svg', 'I configure and manage Mikrotik routers and infrastructure to ensure reliable and secure network systems.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">06</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Mikrotik</h3>
                                    <p class="text-xs font-medium italic opacity-80">Network Administration</p>
                                </div>
                                <img src="assets/img/expertise/mikrotik.svg" alt="Mikrotik" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                        </div>
                    </div>
                </section>
            </div>

            <!-- CENTER COLUMN: Video — hidden on mobile, shown on desktop (6/12) -->
            <div class="hidden lg:block lg:col-span-6 relative lg:border-x-0 border-black dark:border-white lg:py-0">
                <figure class="group relative overflow-hidden border-2 border-black dark:border-white w-full h-full min-h-[400px]">
                    <video
                        src="assets/vidio/me.mp4"
                        class="w-full h-full object-cover object-center grayscale group-hover:grayscale-0 transition duration-700"
                        style="min-height: 400px;"
                        autoplay loop muted playsinline
                    ></video>
                    <div class="absolute bottom-0 left-0 bg-black text-white dark:bg-white dark:text-black p-3 m-4 border border-white/20 dark:border-black/20 backdrop-blur-md">
                        <h3 class="text-lg font-black uppercase tracking-tighter">The Visionary</h3>
                        <p class="text-xs font-medium opacity-80 uppercase tracking-widest mt-1">Self Portrait, 2026</p>
                    </div>
                </figure>
            </div>

            <!-- RIGHT COLUMN: Experience (3/12 on desktop) -->
            <div class="lg:col-span-3 lg:pl-6 flex flex-col gap-4 lg:py-6">
                <!-- Work Experience -->
                <section>
                    <h2 class="text-2xl font-black uppercase border-b-2 border-black dark:border-white pb-1 mb-3">Experience</h2>
                    <div id="experience-scroll" class="max-h-[300px] overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                        <div id="experience-list" class="flex flex-col gap-3 py-1">
                            <!-- Item 1 (Oldest) -->
                            <article onclick="openModal('Online Multi Guna', '2017 - 2018', 'Creative Designer', 'assets/img/work/onlineMulti.svg', 'Started as a Creative Designer, focusing on digital assets, brand identity, and intuitive interface layouts.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">01</span>
                                    <div class="w-5 h-5 border-2 border-black dark:border-white mt-1 group-hover/item:border-white dark:group-hover/item:border-black"></div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-black uppercase tracking-widest mb-1 group-hover/item:text-white dark:group-hover/item:text-black">2017 - 2018</p>
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Online Multi Guna</h3>
                                    <p class="text-xs font-medium italic opacity-80">Creative Designer</p>
                                </div>
                                <img src="assets/img/work/onlineMulti.svg" alt="Online Multi Guna" class="w-10 h-10 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>

                            <!-- Item 2 -->
                            <article onclick="openModal('Powerblock Indonesia', '2019 - 2022', 'Senior IT Infrastructure', 'assets/img/work/powerblock.svg', 'Managed internal IT infrastructure, ensured system uptime, and maintained critical hardware and network security architectures.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">02</span>
                                    <div class="w-5 h-5 border-2 border-black dark:border-white mt-1 group-hover/item:border-white dark:group-hover/item:border-black"></div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-black uppercase tracking-widest mb-1 group-hover/item:text-white dark:group-hover/item:text-black">2019 - 2022</p>
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Powerblock Indonesia</h3>
                                    <p class="text-xs font-medium italic opacity-80">Senior IT Infrastructure</p>
                                </div>
                                <img src="assets/img/work/powerblock.svg" alt="Powerblock" class="w-10 h-10 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>

                            <!-- Item 3 (Present) -->
                            <article onclick="openModal('Posco DX Indonesia', '2022 - Present', 'Software Engineer', 'assets/img/work/poscoDX.svg', 'Developing enterprise scalable applications, leading front-end architecture, and maintaining continuous deployment pipelines.')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer">
                                <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0">
                                    <span class="text-2xl font-black">03</span>
                                    <div class="w-5 h-5 border-2 border-black dark:border-white mt-1 flex items-center justify-center bg-black text-white dark:bg-white dark:text-black group-hover/item:border-white dark:group-hover/item:border-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-black uppercase tracking-widest mb-1 group-hover/item:text-white dark:group-hover/item:text-black">2022 - Present</p>
                                    <h3 class="text-base font-black uppercase leading-tight mb-1">Posco DX Indonesia</h3>
                                    <p class="text-xs font-medium italic opacity-80">Software Engineer</p>
                                </div>
                                <img src="assets/img/work/poscoDX.svg" alt="Posco DX" class="w-10 h-10 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            </article>
                        </div>
                    </div>
                </section>

                <!-- Latest Project Snippets -->
                <section>
                    <h2 class="text-2xl font-black uppercase border-b-2 border-black dark:border-white pb-1 mb-3">Latest Work</h2>
                    <div class="flex flex-col gap-3">
                            <!-- Work 1 -->
                            <article onclick="openModal('XXI Mobile App', 'UI/UX Design', 'Redesign & Prototype', 'assets/img/portofolio-1-mockup.jpg', 'Complete redesign of the Cinema XXI mobile application. Focused on improving user flow, ticket booking experience, and a modern dark editorial aesthetic.')" class="group/work cursor-pointer border-2 border-black dark:border-white overflow-hidden relative hover:border-black dark:hover:border-white transition">
                                <div class="relative overflow-hidden">
                                    <img src="assets/img/portofolio-1-mockup.jpg" alt="XXI Mobile App" class="w-full h-24 object-cover grayscale group-hover/work:grayscale-0 group-hover/work:scale-105 transition duration-500" />
                                    <div class="absolute inset-0 bg-black/60 flex items-end p-3 opacity-0 group-hover/work:opacity-100 transition duration-300">
                                        <span class="text-white text-xs font-black uppercase tracking-widest border border-white px-2 py-1">View →</span>
                                    </div>
                                </div>
                                <div class="p-3 flex items-center justify-between border-t-2 border-black dark:border-white group-hover/work:bg-black group-hover/work:text-white dark:group-hover/work:bg-white dark:group-hover/work:text-black transition">
                                    <div>
                                        <h3 class="text-sm font-black uppercase leading-tight">XXI Mobile App</h3>
                                        <p class="text-[10px] font-medium italic opacity-70 mt-0.5">UI/UX · Redesign</p>
                                    </div>
                                    <span class="text-xs font-black opacity-50">01</span>
                                </div>
                            </article>

                            <!-- Work 2 -->
                            <article onclick="openModal('Portofolio Website', 'Web Development', 'Full Stack Build', 'assets/img/portofolio-2-mockup.jpg', 'Designed and developed a full-featured personal portfolio website with PHP native, magazine-style editorial layout, dark mode, and smooth animations.')" class="group/work cursor-pointer border-2 border-black dark:border-white overflow-hidden relative hover:border-black dark:hover:border-white transition">
                                <div class="relative overflow-hidden">
                                    <img src="assets/img/portofolio-2-mockup.jpg" alt="Portofolio Website" class="w-full h-24 object-cover grayscale group-hover/work:grayscale-0 group-hover/work:scale-105 transition duration-500" />
                                    <div class="absolute inset-0 bg-black/60 flex items-end p-3 opacity-0 group-hover/work:opacity-100 transition duration-300">
                                        <span class="text-white text-xs font-black uppercase tracking-widest border border-white px-2 py-1">View →</span>
                                    </div>
                                </div>
                                <div class="p-3 flex items-center justify-between border-t-2 border-black dark:border-white group-hover/work:bg-black group-hover/work:text-white dark:group-hover/work:bg-white dark:group-hover/work:text-black transition">
                                    <div>
                                        <h3 class="text-sm font-black uppercase leading-tight">Portfolio Website</h3>
                                        <p class="text-[10px] font-medium italic opacity-70 mt-0.5">Web Dev · Full Stack</p>
                                    </div>
                                    <span class="text-xs font-black opacity-50">02</span>
                                </div>
                            </article>
                    </div>
                </section>
            </div>

        </main>
        
        <!-- Footer / Extra Portfolios -->
        <section class="mt-10">
            <div class="flex flex-col md:flex-row justify-between md:items-end border-b-2 border-black dark:border-white pb-3 mb-6 gap-4">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter leading-none">Index of Work</h2>
                <a href="portofolio.php" class="text-sm font-black uppercase border-2 border-black dark:border-white px-4 py-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">View Directory &rarr;</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10">
                <!-- Card 1 -->
                <article class="group flex flex-col gap-4">
                    <a href="portofolio_detail/1" class="block overflow-hidden border-2 border-black dark:border-white aspect-[16/10] relative">
                        <img src="assets/img/portofolio-1-mockup.jpg" alt="XXI Mobile Apps" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-700" />
                    </a>
                    <div>
                        <div class="flex gap-2 mb-2">
                            <span class="bg-black text-white dark:bg-white dark:text-black text-[10px] font-black uppercase px-2 py-1 tracking-widest">UI/UX</span>
                            <span class="border border-black dark:border-white text-[10px] font-black uppercase px-2 py-1 tracking-widest">Redesign</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-black uppercase leading-tight hover:underline underline-offset-4 decoration-2"><a href="portofolio_detail/1">Redesign UI/UX - XXI Mobile Apps</a></h3>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="group flex flex-col gap-4">
                    <a href="portofolio_detail/2" class="block overflow-hidden border-2 border-black dark:border-white aspect-[16/10] relative">
                        <img src="assets/img/portofolio-2-mockup.jpg" alt="KeepitBee" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-700" />
                    </a>
                    <div>
                        <div class="flex gap-2 mb-2">
                            <span class="bg-black text-white dark:bg-white dark:text-black text-[10px] font-black uppercase px-2 py-1 tracking-widest">Project</span>
                            <span class="border border-black dark:border-white text-[10px] font-black uppercase px-2 py-1 tracking-widest">Design</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-black uppercase leading-tight hover:underline underline-offset-4 decoration-2"><a href="portofolio_detail/2">KeepitBee - Daily Management</a></h3>
                    </div>
                </article>
            </div>
        </section>
        
        <!-- Contact CTA -->
        <footer class="mt-16 mb-6 border-2 border-black dark:border-white p-6 md:p-12 text-center bg-black text-white dark:bg-white dark:text-black">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase tracking-tighter leading-none mb-3">Let's Build</h2>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase tracking-tighter leading-none text-transparent" style="-webkit-text-stroke: 1px currentColor;">Something</h2>
            <div class="mt-8 flex justify-center gap-3 flex-wrap">
                <a href="https://www.linkedin.com/in/msafei/" class="border border-white dark:border-black px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition duration-300">LinkedIn</a>
                <a href="https://www.behance.net/savei_" class="border border-white dark:border-black px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition duration-300">Behance</a>
                <a href="https://dribbble.com/_savei" class="border border-white dark:border-black px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition duration-300">Dribbble</a>
                <a href="https://github.com/msafei" class="border border-white dark:border-black px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition duration-300">Github</a>
            </div>
        </footer>

    </div>

    <!-- Info Modal -->
    <div id="info-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto bg-black/50 backdrop-blur-sm pointer-events-none opacity-0 transition-all duration-300 hs-overlay-open:opacity-100 hs-overlay-open:pointer-events-auto">
      <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center justify-center">
         <div class="w-full flex flex-col bg-[#F8F8F5] dark:bg-[#0A0A0A] border-4 border-black dark:border-white shadow-xl pointer-events-auto p-6 md:p-8">
            <div class="flex justify-between items-center border-b-4 border-black dark:border-white pb-4 mb-6">
                <h3 id="modal-title" class="font-black text-2xl md:text-3xl uppercase tracking-tighter">Title</h3>
                <button type="button" class="text-black dark:text-white hover:opacity-70 transition border-2 border-black dark:border-white p-1 shrink-0" data-hs-overlay="#info-modal">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="flex items-center gap-6 mb-6">
                <img id="modal-img" src="" alt="Logo" class="w-20 h-20 object-contain p-2 border-2 border-black dark:border-white bg-white" />
                <div class="flex-1">
                    <p id="modal-subtitle" class="text-sm font-black uppercase tracking-widest opacity-80 mb-1">Subtitle</p>
                    <p id="modal-desc" class="text-sm font-medium italic">Description</p>
                </div>
            </div>
            <div class="border-t-2 border-black dark:border-white pt-4">
                <p id="modal-content" class="text-sm font-medium leading-relaxed">
                    Detail content here...
                </p>
            </div>
         </div>
      </div>
    </div>

    <script>
        const startYear = 2020;
        const currentYear = new Date().getFullYear();
        document.getElementById('experience-years').textContent = currentYear - startYear;

        // Modal Logic
        function openModal(title, subtitle, desc, img, content) {
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-subtitle').textContent = subtitle;
            document.getElementById('modal-desc').textContent = desc;
            document.getElementById('modal-img').src = img;
            document.getElementById('modal-content').textContent = content;
            HSOverlay.open(document.getElementById('info-modal'));
        }

        // Generic Infinite Scroll Function
        function setupInfiniteScroll(scrollId, listId) {
            const scrollEl = document.getElementById(scrollId);
            const listEl = document.getElementById(listId);
            if (scrollEl && listEl) {
                listEl.innerHTML += listEl.innerHTML; // duplicate for seamless loop
                let interval;
                function start() {
                    interval = setInterval(() => {
                        scrollEl.scrollTop += 1;
                        if (scrollEl.scrollTop >= listEl.scrollHeight / 2) {
                            scrollEl.scrollTop = 0;
                        }
                    }, 40);
                }
                function stop() { clearInterval(interval); }
                scrollEl.addEventListener('mouseenter', stop);
                scrollEl.addEventListener('mouseleave', start);
                start();
            }
        }

        setupInfiniteScroll('experience-scroll', 'experience-list');
        setupInfiniteScroll('expertise-scroll', 'expertise-list');

    </script>
    <script src="./assets/js/preline.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/clipboard.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>