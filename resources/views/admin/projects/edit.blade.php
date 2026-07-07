@extends('layouts.admin')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.projects.index') }}" class="w-10 h-10 border-2 border-black flex items-center justify-center hover:bg-black hover:text-white transition">&larr;</a>
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Edit Project</h1>
    </div>
</div>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-8 bg-white border-2 border-black p-6 md:p-8 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Project Title</label>
            <input type="text" name="title" value="{{ old('title', $project->title) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('title') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Category (e.g. UI/UX, Web Dev)</label>
            <input type="text" name="category" value="{{ old('category', $project->category) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('category') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Tags (comma separated)</label>
            <input type="text" name="tags" value="{{ old('tags', $project->tags) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">
            @error('tags') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Cover Image (Optional to keep current)</label>
            <input type="file" name="image_file" accept="image/*" class="w-full border-2 border-black p-2 focus:ring-0 focus:outline-none focus:border-primary transition">
            @if($project->image_path)
                <div class="mt-2 flex items-center gap-4">
                    <img src="{{ asset($project->image_path) }}" class="h-12 border-2 border-black p-1 object-cover">
                    <span class="text-xs font-bold text-gray-500">Current Image</span>
                </div>
            @endif
            @error('image_file') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Short Description (Summary)</label>
        <textarea name="short_description" rows="2" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>{{ old('short_description', $project->short_description) }}</textarea>
        @error('short_description') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Full Description (HTML Allowed)</label>
        <p class="text-xs text-gray-500 mb-2 font-medium">You can use basic HTML tags here like &lt;h2&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt; to format your case study.</p>
        <textarea name="full_description" rows="10" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition font-mono text-sm">{{ old('full_description', $project->full_description) }}</textarea>
        @error('full_description') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end pt-4">
        <button type="submit" class="bg-black text-white px-8 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
            Update Project
        </button>
    </div>
</form>
@endsection
