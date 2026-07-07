@extends('layouts.front')

@section('content')
<div class="mx-auto max-w-[1200px] px-4 lg:px-6 pt-10 pb-20">
    <div class="mb-10 text-center mt-6">
        <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter border-b-4 border-black dark:border-white pb-4 inline-block">Certificates</h1>
        <p class="mt-4 text-sm md:text-base font-bold tracking-widest uppercase">My Licenses & Certifications</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($certificates as $cert)
        <article class="group border-4 border-black dark:border-white p-6 relative hover:-translate-y-2 hover:shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] dark:hover:shadow-[8px_8px_0px_0px_rgba(255,255,255,1)] transition bg-white dark:bg-black flex flex-col h-full">
            <div class="flex-1">
                <div class="flex justify-between items-start mb-4 gap-4">
                    <h2 class="text-xl font-black uppercase leading-tight group-hover:underline underline-offset-4 decoration-2">{{ $cert->name }}</h2>
                </div>
                <div class="mb-6 space-y-1">
                    <p class="text-sm font-bold uppercase tracking-widest">{{ $cert->issuing_organization }}</p>
                    <p class="text-xs font-medium italic opacity-70">Issued: {{ $cert->issue_date }} {{ $cert->expiration_date ? '- Expires: ' . $cert->expiration_date : '' }}</p>
                    @if($cert->credential_id)
                    <p class="text-xs font-medium opacity-50 mt-2">Credential ID: {{ $cert->credential_id }}</p>
                    @endif
                </div>
            </div>
            
            @if($cert->credential_url)
            <div class="mt-4 pt-4 border-t-2 border-black dark:border-white">
                <a href="{{ $cert->credential_url }}" target="_blank" class="block text-center w-full bg-black text-white dark:bg-white dark:text-black py-2 text-xs font-black uppercase tracking-widest hover:opacity-80 transition">
                    Show Credential &rarr;
                </a>
            </div>
            @endif
        </article>
        @endforeach
    </div>
</div>
@endsection
