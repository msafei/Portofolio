@extends('layouts.admin')

@section('content')
<div class="mb-8">
    <h1 class="text-4xl font-black uppercase tracking-tighter">Profile Settings</h1>
    <p class="text-gray-500 mt-2 font-medium">Manage your personal information, bio, and main media.</p>
</div>

<form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8 bg-white border-2 border-black p-6 md:p-8 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name', $profile->name) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('name') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Title</label>
            <input type="text" name="title" value="{{ old('title', $profile->title) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('title') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Portfolio Subtitle</label>
            <input type="text" name="portfolio_subtitle" value="{{ old('portfolio_subtitle', $profile->portfolio_subtitle) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('portfolio_subtitle') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email', $profile->email) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('email') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Career Start Year</label>
            <input type="number" name="start_year" value="{{ old('start_year', $profile->start_year) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('start_year') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Bio</label>
        <textarea name="bio" rows="5" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>{{ old('bio', $profile->bio) }}</textarea>
        @error('bio') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div class="border-t-2 border-dashed border-gray-300 pt-8">
        <h2 class="text-2xl font-black uppercase tracking-tighter mb-4">Media & Resume</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block text-sm font-black uppercase tracking-widest mb-2">Media Type</label>
                <select name="media_type" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">
                    <option value="video" {{ old('media_type', $profile->media_type) == 'video' ? 'selected' : '' }}>Video</option>
                    <option value="image" {{ old('media_type', $profile->media_type) == 'image' ? 'selected' : '' }}>Image</option>
                </select>
                @error('media_type') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label class="block text-sm font-black uppercase tracking-widest mb-2">Update Media File (Optional)</label>
                <input type="file" name="media_file" accept="video/mp4,image/*,.gif" class="w-full border-2 border-black p-2 focus:ring-0 focus:outline-none focus:border-primary transition">
                <p class="text-xs text-gray-500 mt-1 font-medium">Current: {{ $profile->media_path }}</p>
                @error('media_file') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-black uppercase tracking-widest mb-2">Media Title</label>
                <input type="text" name="media_title" value="{{ old('media_title', $profile->media_title) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
                @error('media_title') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-black uppercase tracking-widest mb-2">Media Subtitle</label>
                <input type="text" name="media_subtitle" value="{{ old('media_subtitle', $profile->media_subtitle) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
                @error('media_subtitle') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-black uppercase tracking-widest mb-2">Update CV/Resume PDF (Optional)</label>
                <input type="file" name="resume_file" accept="application/pdf" class="w-full border-2 border-black p-2 focus:ring-0 focus:outline-none focus:border-primary transition">
                @if($profile->resume_link)
                <p class="text-xs text-gray-500 mt-1 font-medium">Current: <a href="{{ asset($profile->resume_link) }}" target="_blank" class="underline hover:text-primary">{{ $profile->resume_link }}</a></p>
                @endif
                @error('resume_file') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <div class="flex justify-end pt-4">
        <button type="submit" class="bg-black text-white px-8 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
            Save Changes
        </button>
    </div>
</form>
@endsection
