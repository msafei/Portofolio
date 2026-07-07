@extends('layouts.admin')

@section('content')
<div class="mb-8 flex flex-col md:flex-row justify-between md:items-end gap-4">
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Dashboard</h1>
        <p class="text-gray-500 mt-2 font-medium">Welcome back to your portfolio command center.</p>
    </div>
    <a href="{{ route('home') }}" target="_blank" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c] flex items-center gap-2 w-max">
        <span>View Site</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white border-2 border-black p-6 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition">
        <h3 class="text-lg font-bold uppercase tracking-widest text-gray-500">Experiences</h3>
        <p class="text-5xl font-black mt-2">{{ $stats['experiences'] }}</p>
        <a href="{{ route('admin.experiences.index') }}" class="inline-block mt-4 text-sm font-bold underline underline-offset-2 hover:text-primary">Manage &rarr;</a>
    </div>

    <div class="bg-white border-2 border-black p-6 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition">
        <h3 class="text-lg font-bold uppercase tracking-widest text-gray-500">Expertise</h3>
        <p class="text-5xl font-black mt-2">{{ $stats['expertises'] }}</p>
        <a href="{{ route('admin.expertises.index') }}" class="inline-block mt-4 text-sm font-bold underline underline-offset-2 hover:text-primary">Manage &rarr;</a>
    </div>

    <div class="bg-white border-2 border-black p-6 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition">
        <h3 class="text-lg font-bold uppercase tracking-widest text-gray-500">Projects</h3>
        <p class="text-5xl font-black mt-2">{{ $stats['projects'] }}</p>
        <a href="{{ route('admin.projects.index') }}" class="inline-block mt-4 text-sm font-bold underline underline-offset-2 hover:text-primary">Manage &rarr;</a>
    </div>
</div>

<div class="mt-12">
    <div class="bg-black text-white p-8 rounded-lg">
        <h2 class="text-2xl font-black uppercase tracking-tighter mb-2">Need to update your resume?</h2>
        <p class="font-medium opacity-80 mb-6">You can upload a new resume PDF, update your bio, and change the main profile video from the Profile Settings.</p>
        <a href="{{ route('admin.profile.index') }}" class="bg-white text-black border-2 border-transparent px-6 py-3 font-bold uppercase tracking-widest text-sm hover:bg-black hover:text-white hover:border-white transition inline-block">Profile Settings</a>
    </div>
</div>
@endsection
