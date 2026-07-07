@extends('layouts.front')

@section('content')
<div class="mx-auto max-w-[1200px] px-4 lg:px-6 pb-6">

    <!-- Magazine Header -->
    <header class="mt-4 mb-4 border-b-2 border-black dark:border-white pb-3 md:pb-4 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-black uppercase tracking-tighter leading-none text-black dark:text-white">
            {{ $profile->name }}
        </h1>
        <div class="mt-3 md:mt-4 flex flex-row justify-between items-center text-[9px] sm:text-[10px] md:text-xs font-bold uppercase tracking-widest border-t-2 border-black dark:border-white pt-2">
            <span>{{ $profile->portfolio_subtitle ?? 'Vol. 1 — The Portofolio' }}</span>
            <span>{{ $profile->title }}</span>
            <span>Est. {{ $profile->start_year }}</span>
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
                    {!! nl2br(e($profile->bio)) !!}
                </p>
                <div class="mt-6 flex flex-col gap-2">
                    <a href="{{ $profile->resume_link ?? '#' }}" download class="w-full text-center border-2 border-black dark:border-white py-2 text-sm font-bold uppercase tracking-widest hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition duration-300">Download CV</a>
                    <button type="button" data-clipboard-text="{{ $profile->email ?? 'msafei.ti@gmail.com' }}" class="js-clipboard w-full text-center border-2 border-black dark:border-white py-2 text-sm font-bold uppercase tracking-widest hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition duration-300 relative">
                        Copy Email
                        <span class="hs-tooltip-content invisible z-10 hidden rounded bg-black px-2 py-1 text-[10px] font-medium text-white opacity-0 transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-white dark:text-black absolute -top-8 left-1/2 -translate-x-1/2">Copied!</span>
                    </button>
                </div>
            </section>

            <!-- MOBILE ONLY: Media shown between Profile & Expertise -->
            <figure class="lg:hidden group relative overflow-hidden border-2 border-black dark:border-white w-full aspect-[4/3]">
                <img src="{{ asset($profile->media_path) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-700" />
                <div class="absolute bottom-0 left-0 bg-black text-white dark:bg-white dark:text-black p-3 m-3 border border-white/20 dark:border-black/20 backdrop-blur-md">
                    <h3 class="text-base font-black uppercase tracking-tighter">{{ $profile->media_title }}</h3>
                    <p class="text-xs font-medium opacity-80 uppercase tracking-widest mt-1">{{ $profile->media_subtitle }}</p>
                </div>
            </figure>

            <!-- Expertise -->
            <section>
                <h2 class="text-2xl font-black uppercase border-b-2 border-black dark:border-white pb-1 mb-3">Expertise</h2>
                <div id="expertise-scroll" class="h-[212px] overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                    <div id="expertise-list" class="flex flex-col gap-3 py-1">
                        @foreach($expertises as $idx => $expertise)
                        <article onclick="openModal('{{ addslashes($expertise->name) }}', '{{ addslashes($expertise->category) }}', '', '{{ asset($expertise->logo_path) }}', '{{ addslashes($expertise->description) }}')" class="flex items-center gap-4 border-2 border-black dark:border-white p-3 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition group/item cursor-pointer h-[60px] shrink-0">
                            <div class="flex flex-col items-center justify-center border-r-2 border-black dark:border-white pr-4 group-hover/item:border-white dark:group-hover/item:border-black shrink-0 h-full">
                                <span class="text-2xl font-black leading-none">{{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base font-black uppercase leading-tight mb-1 truncate">{{ $expertise->name }}</h3>
                                <p class="text-xs font-medium italic opacity-80 truncate">{{ $expertise->category }}</p>
                            </div>
                            @if($expertise->logo_path)
                            <img src="{{ asset($expertise->logo_path) }}" alt="{{ $expertise->name }}" class="w-8 h-8 object-contain grayscale group-hover/item:grayscale-0 transition duration-300 shrink-0" />
                            @endif
                        </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        <!-- CENTER COLUMN: Media — hidden on mobile, shown on desktop (6/12) -->
        <div class="hidden lg:block lg:col-span-6 relative lg:border-x-0 border-black dark:border-white lg:py-0 min-h-[400px]">
            <figure class="group absolute inset-0 overflow-hidden lg:border-y-0 lg:border-x-2 border-2 border-black dark:border-white w-full h-full">
                <img src="{{ asset($profile->media_path) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-700 animate-breathe" />
                <div class="absolute bottom-0 left-0 bg-black text-white dark:bg-white dark:text-black p-3 m-4 border border-white/20 dark:border-black/20 backdrop-blur-md z-10">
                    <h3 class="text-lg font-black uppercase tracking-tighter">{{ $profile->media_title }}</h3>
                    <p class="text-xs font-medium opacity-80 uppercase tracking-widest mt-1">{{ $profile->media_subtitle }}</p>
                </div>
            </figure>
        </div>

        <!-- RIGHT COLUMN: Experience & Latest Work (3/12 on desktop) -->
        <div class="lg:col-span-3 lg:pl-6 flex flex-col gap-4 lg:py-6">
            <!-- Work Experience -->
            <section>
                <h2 class="text-2xl font-black uppercase border-b-2 border-black dark:border-white pb-1 mb-3">Experience</h2>
                <div id="experience-scroll" class="max-h-[300px] overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                    <div id="experience-list" class="flex flex-col gap-3 py-1">
                        @foreach($experiences as $idx => $experience)
                        @php
                            $isP = $experience->is_present;
                            $bgClass = $isP ? 'bg-black text-white dark:bg-white dark:text-black' : 'bg-transparent text-black dark:text-white';
                            $borderClass = 'border-black dark:border-white';
                            $logoBorder = $isP ? 'border-white dark:border-black' : 'border-black dark:border-white';
                            $logoFilter = $isP ? '' : 'grayscale group-hover/item:grayscale-0';
                        @endphp
                        <article style="--theme: {{ $experience->theme_color ?? '#ffa812' }};" onclick="openModal('{{ addslashes($experience->company) }}', '{{ addslashes($experience->year_range) }}', '{{ addslashes($experience->role) }}', '{{ asset($experience->logo_path) }}', '{{ addslashes($experience->description) }}')" class="flex items-center gap-4 border-2 {{ $bgClass }} {{ $borderClass }} p-3 transition-colors duration-300 group/item cursor-pointer hover:!border-[color:var(--theme)]">
                            @if($experience->logo_path)
                            <div class="border-r-2 {{ $logoBorder }} pr-4 shrink-0 flex items-center justify-center transition-colors duration-300 group-hover/item:!border-[color:var(--theme)]">
                                <img src="{{ asset($experience->logo_path) }}" alt="{{ $experience->company }}" class="w-10 h-10 object-contain transition duration-300 {{ $logoFilter }}" />
                            </div>
                            @endif
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-black uppercase tracking-widest mb-1 opacity-80">{{ $experience->year_only_range }}</p>
                                <h3 class="text-base font-black uppercase leading-tight mb-1">{{ $experience->company }}</h3>
                                <p class="text-xs font-medium italic opacity-80">{{ $experience->role }}</p>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Certificates Snippets -->
            <!-- Certificates Snippets -->
            <section>
                <div class="flex items-center justify-between border-b-2 border-black dark:border-white pb-1 mb-3">
                    <h2 class="text-2xl font-black uppercase">Certificates</h2>
                    <a href="{{ route('certificates.index') }}" class="group/link flex items-center justify-center p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-transform duration-300 group-hover/link:scale-125" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
                <div id="certificates-scroll" class="h-[210px] overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                    <div id="certificates-list" class="flex flex-col gap-3 py-1">
                        @foreach($certificates as $idx => $cert)
                        <article class="border-2 border-black dark:border-white bg-transparent p-3 transition-colors duration-300 h-[95px] flex flex-col justify-center shrink-0">
                            <h3 class="text-sm font-black uppercase leading-tight mb-1 truncate" title="{{ $cert->name }}">{{ $cert->name }}</h3>
                            <p class="text-[10px] font-medium italic opacity-80 mb-2 truncate">{{ $cert->issuing_organization }}</p>
                            
                            <div class="flex items-end justify-between mt-auto">
                                <span class="text-[10px] font-black uppercase tracking-widest">{{ $cert->issue_date }}</span>
                                @if($cert->credential_url)
                                <a href="{{ $cert->credential_url }}" target="_blank" class="text-[9px] font-black uppercase tracking-widest border border-black dark:border-white px-2 py-0.5 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">Link &rarr;</a>
                                @endif
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

    </main>
    
    <!-- Footer / Extra Portfolios -->
    <section class="mt-10">
        <div class="flex flex-col md:flex-row justify-between md:items-end border-b-2 border-black dark:border-white pb-3 mb-6 gap-4">
            <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter leading-none">Index of Work</h2>
            <a href="{{ route('portfolio.index') }}" class="text-sm font-black uppercase border-2 border-black dark:border-white px-4 py-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">View Directory &rarr;</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10">
            @foreach($latestWorks as $work)
            <article class="group flex flex-col gap-4">
                <a href="{{ route('portfolio.show', $work->id) }}" class="block overflow-hidden border-2 border-black dark:border-white aspect-[16/10] relative">
                    <img src="{{ asset($work->image_path) }}" alt="{{ $work->title }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-700" />
                </a>
                <div>
                    <div class="flex gap-2 mb-2">
                        <span class="bg-black text-white dark:bg-white dark:text-black text-[10px] font-black uppercase px-2 py-1 tracking-widest">{{ $work->category }}</span>
                        @foreach(explode(',', $work->tags) as $tag)
                        <span class="border border-black dark:border-white text-[10px] font-black uppercase px-2 py-1 tracking-widest">{{ trim($tag) }}</span>
                        @endforeach
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-black uppercase leading-tight hover:underline underline-offset-4 decoration-2"><a href="{{ route('portfolio.show', $work->id) }}">{{ $work->title }}</a></h3>
                </div>
            </article>
            @endforeach
        </div>
    </section>
    
    <!-- Contact CTA -->
    <footer class="mt-16 mb-6 border-2 border-black dark:border-white p-6 md:p-12 text-center bg-black text-white dark:bg-white dark:text-black">
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase tracking-tighter leading-none mb-3">Let's Build</h2>
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase tracking-tighter leading-none text-transparent" style="-webkit-text-stroke: 1px currentColor;">Something</h2>
        <div class="mt-8 flex justify-center gap-3 flex-wrap">
            @foreach($socialLinks as $link)
            <a href="{{ $link->url }}" class="border border-white dark:border-black px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition duration-300">{{ $link->platform }}</a>
            @endforeach
        </div>
    </footer>

</div>

<!-- Info Modal -->
<div id="info-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto bg-black/50 backdrop-blur-sm pointer-events-none opacity-0 transition-all duration-300 hs-overlay-open:opacity-100 hs-overlay-open:pointer-events-auto">
  <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center justify-center">
     <div class="w-full flex flex-col bg-[#F8F8F5] dark:bg-[#0A0A0A] border-4 border-black dark:border-white shadow-xl pointer-events-auto p-6 md:p-8">
        <div class="flex justify-between items-center border-b-4 border-black dark:border-white pb-4 mb-6">
            <h3 id="modal-title" class="font-black text-2xl md:text-3xl uppercase tracking-tighter">Title</h3>
            <button type="button" class="text-black dark:text-white hover:opacity-70 transition border-2 border-black dark:border-white p-1 shrink-0" onclick="closeModal()">
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
@endsection

@push('scripts')
<script>
    // Modal Logic
    function openModal(title, subtitle, desc, img, content) {
        document.getElementById('modal-title').textContent = title;
        document.getElementById('modal-subtitle').textContent = subtitle;
        document.getElementById('modal-desc').textContent = desc;
        document.getElementById('modal-img').src = img;
        document.getElementById('modal-content').innerHTML = content; // use innerHTML if content has HTML
        
        const modal = document.getElementById('info-modal');
        const modalDialog = modal.querySelector('.sm\\:max-w-lg');
        
        // Remove hidden
        modal.classList.remove('hidden');
        
        // Force reflow
        void modal.offsetWidth;
        
        // Add visible classes
        modal.classList.remove('pointer-events-none', 'opacity-0');
        modal.classList.add('pointer-events-auto', 'opacity-100');
        
        if(modalDialog) {
            modalDialog.classList.remove('opacity-0', 'scale-95');
            modalDialog.classList.add('opacity-100', 'scale-100');
        }
    }

    function closeModal() {
        const modal = document.getElementById('info-modal');
        const modalDialog = modal.querySelector('.sm\\:max-w-lg');
        
        // Remove visible classes
        modal.classList.remove('pointer-events-auto', 'opacity-100');
        modal.classList.add('pointer-events-none', 'opacity-0');
        
        if(modalDialog) {
            modalDialog.classList.remove('opacity-100', 'scale-100');
            modalDialog.classList.add('opacity-0', 'scale-95');
        }
        
        // Add hidden after transition
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
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
    setupInfiniteScroll('certificates-scroll', 'certificates-list');
</script>
@endpush