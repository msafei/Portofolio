@extends('layouts.front')

@section('body_class', 'relative h-screen overflow-y-auto overflow-x-hidden bg-light text-dark dark:bg-dark-2 dark:text-light transition-colors duration-300 font-[\'Bricolage_Grotesque\'] antialiased')

@section('content')
<div class="mx-auto max-w-[1200px] p-4 lg:p-6 mt-8">
    <div class="mb-10 text-center lg:text-left">
        <h2 class="text-4xl lg:text-[60px] font-black uppercase tracking-tighter leading-none mb-4">
            My <span style="color: inherit;">Projects</span>
        </h2>
        <p class="text-sm md:text-base font-medium leading-relaxed opacity-80 max-w-2xl">
            Explore my latest works, case studies, and creative explorations.
        </p>
    </div>

    <!-- Portfolio Grid (3 Columns) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        @foreach($projects as $project)
        <div class="group relative overflow-hidden border-2 border-black dark:border-white h-full flex flex-col">
            <div class="relative aspect-[4/3] overflow-hidden border-b-2 border-black dark:border-white">
                <img src="{{ asset($project->image_path) }}" alt="{{ $project->title }}" class="h-full w-full object-cover grayscale group-hover:grayscale-0 transition duration-700" />
                <a href="{{ route('portfolio.show', $project->id) }}" class="absolute left-1/2 top-1/2 grid h-16 w-16 -translate-x-1/2 -translate-y-1/2 place-content-center bg-black text-white dark:bg-white dark:text-black transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100 rounded-full hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-8 w-8">
                        <path d="M5 15L15 5M15 5H6M15 5V14" />
                    </svg>
                </a>
            </div>
            <div class="flex flex-col flex-1 p-6 bg-[#F8F8F5] dark:bg-[#0A0A0A] group-hover:bg-black group-hover:text-white dark:group-hover:bg-white dark:group-hover:text-black transition duration-300">
                <div class="flex gap-2 mb-4">
                    <span class="bg-black text-white dark:bg-white dark:text-black group-hover:bg-white group-hover:text-black dark:group-hover:bg-black dark:group-hover:text-white text-[10px] font-black uppercase px-3 py-1 tracking-widest transition">{{ $project->category }}</span>
                </div>
                <h3 class="text-2xl font-black uppercase tracking-tighter mb-2">
                    <a href="{{ route('portfolio.show', $project->id) }}" class="hover:underline underline-offset-4">
                        {{ $project->title }}
                    </a>
                </h3>
                <p class="text-sm font-medium opacity-80 leading-relaxed">{{ $project->short_description }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center">
        {{ $projects->links('pagination::tailwind') }}
    </div>

    <!-- Contact CTA -->
    <div class="mt-16 mb-10">
        <div class="group flex gap-6 overflow-hidden border-2 border-black dark:border-white p-6 bg-black text-white dark:bg-white dark:text-black hover:invert transition cursor-pointer">
            <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                <a href="mailto:msafei.ti@gmail.com" class="relative inline-block whitespace-nowrap text-3xl font-black uppercase tracking-tighter transition before:mr-3 before:content-['\2022'] md:text-[40px]">
                    Let's Work Together
                </a>
                <a href="mailto:msafei.ti@gmail.com" class="relative inline-block whitespace-nowrap text-3xl font-black uppercase tracking-tighter transition before:mr-3 before:content-['\2022'] md:text-[40px]">
                    Let's Work Together
                </a>
            </div>
            <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                <a href="mailto:msafei.ti@gmail.com" class="relative inline-block whitespace-nowrap text-3xl font-black uppercase tracking-tighter transition before:mr-3 before:content-['\2022'] md:text-[40px]">
                    Let's Work Together
                </a>
                <a href="mailto:msafei.ti@gmail.com" class="relative inline-block whitespace-nowrap text-3xl font-black uppercase tracking-tighter transition before:mr-3 before:content-['\2022'] md:text-[40px]">
                    Let's Work Together
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
