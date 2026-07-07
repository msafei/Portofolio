@extends('layouts.admin')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.expertises.index') }}" class="w-10 h-10 border-2 border-black flex items-center justify-center hover:bg-black hover:text-white transition">&larr;</a>
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Add Expertise</h1>
    </div>
</div>

<form action="{{ route('admin.expertises.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 bg-white border-2 border-black p-6 md:p-8 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Skill / Tool Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('name') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Category (e.g. Frontend, Design)</label>
            <input type="text" name="category" value="{{ old('category') }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('category') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Description (Optional)</label>
        <textarea name="description" rows="4" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">{{ old('description') }}</textarea>
        @error('description') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Skill Logo / Icon (Optional)</label>
        <input type="file" name="logo_file" accept="image/*" class="w-full border-2 border-black p-2 focus:ring-0 focus:outline-none focus:border-primary transition">
        @error('logo_file') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end pt-4">
        <button type="submit" class="bg-black text-white px-8 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
            Save Expertise
        </button>
    </div>
</form>
@endsection
