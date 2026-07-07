@extends('layouts.front')

@section('body_class', 'relative h-screen overflow-y-auto overflow-x-hidden bg-[#F8F8F5] text-black dark:bg-[#0A0A0A] dark:text-white transition-colors duration-300 font-[\'Bricolage_Grotesque\'] antialiased')

@section('content')
<div class="mx-auto max-w-[1200px] p-6 lg:p-12 xl:p-16">
    
    <!-- Header Section (Text Only) -->
    <div class="mb-10 text-center lg:text-left flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 mt-8">
        <div class="max-w-3xl">
            <a href="{{ route('portfolio.index') }}" class="inline-flex items-center gap-2 text-sm font-black uppercase tracking-widest hover:text-primary transition mb-8">
                &larr; Back to Portfolio
            </a>
            
            <h1 class="text-5xl md:text-7xl lg:text-[90px] font-black uppercase tracking-tighter leading-none mb-6">
                {{ $project->title }}
            </h1>

            <div class="flex gap-3 flex-wrap">
                <span class="bg-black text-white dark:bg-white dark:text-black text-sm font-black uppercase px-4 py-2 tracking-widest">{{ $project->category }}</span>
                @if($project->tags)
                    @foreach(explode(',', $project->tags) as $tag)
                        <span class="border-2 border-black dark:border-white text-sm font-black uppercase px-4 py-2 tracking-widest">{{ trim($tag) }}</span>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="text-left lg:text-right mt-6 lg:mt-0">
            <p class="text-sm font-bold uppercase tracking-widest opacity-50 mb-2">Share Project</p>
            <button type="button" class="js-clipboard border-2 border-black dark:border-white px-6 py-3 font-black uppercase tracking-widest text-sm hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition" data-clipboard-text="{{ url()->current() }}">
                Copy Link
            </button>
        </div>
    </div>

    <!-- Main Project Image -->
    <div class="mb-16 max-w-4xl mx-auto border-4 border-black dark:border-white shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] dark:shadow-[12px_12px_0px_0px_rgba(255,255,255,0.1)] overflow-hidden">
        <img src="{{ asset($project->image_path) }}" alt="{{ $project->title }}" class="w-full h-auto object-cover grayscale hover:grayscale-0 transition duration-1000 block" />
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto border-t-4 border-black dark:border-white pt-12 mb-20">
        <article class="prose max-w-none dark:prose-invert prose-lg md:prose-xl prose-headings:font-black prose-headings:uppercase prose-headings:tracking-tighter prose-p:font-medium prose-p:leading-relaxed prose-a:text-primary hover:prose-a:text-black dark:hover:prose-a:text-white prose-img:border-4 prose-img:border-black dark:prose-img:border-white prose-blockquote:border-black dark:prose-blockquote:border-white prose-blockquote:font-black prose-blockquote:text-2xl prose-blockquote:uppercase">
            
            @if($project->full_description)
                {!! $project->full_description !!}
            @else
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tighter mb-6">Project Overview</h2>
                <p class="font-medium leading-relaxed opacity-80">{{ $project->short_description }}</p>
            @endif

        </article>
    </div>

</div>
@endsection
