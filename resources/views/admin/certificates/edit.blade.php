@extends('layouts.admin')

@section('content')
<div class="mb-8">
    <a href="{{ route('admin.certificates.index') }}" class="text-sm font-bold underline hover:text-primary">&larr; Back to Certificates</a>
    <h1 class="text-4xl font-black uppercase tracking-tighter mt-4">Edit Certificate</h1>
</div>

<form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data" class="bg-white border-2 border-black p-6 md:p-8 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] space-y-6">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="md:col-span-2">
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Name *</label>
            <input type="text" name="name" value="{{ old('name', $certificate->name) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('name') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Issuing Organization *</label>
            <input type="text" name="issuing_organization" value="{{ old('issuing_organization', $certificate->issuing_organization) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('issuing_organization') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Issue Date *</label>
            <input type="text" name="issue_date" value="{{ old('issue_date', $certificate->issue_date) }}" placeholder="e.g. Jan 2025" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('issue_date') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Expiration Date</label>
            <input type="text" name="expiration_date" value="{{ old('expiration_date', $certificate->expiration_date) }}" placeholder="e.g. Jan 2028 (Leave blank if none)" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">
            @error('expiration_date') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Credential ID</label>
            <input type="text" name="credential_id" value="{{ old('credential_id', $certificate->credential_id) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">
            @error('credential_id') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Credential URL</label>
            <input type="url" name="credential_url" value="{{ old('credential_url', $certificate->credential_url) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">
            @error('credential_url') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Certificate Image/Logo (Optional)</label>
            @if($certificate->image_path)
            <div class="mb-4">
                <p class="text-xs font-bold mb-2">Current Image:</p>
                <img src="{{ asset($certificate->image_path) }}" class="h-20 object-cover border border-black">
            </div>
            @endif
            <input type="file" name="image_file" accept="image/*" class="w-full border-2 border-black p-2 focus:ring-0 focus:outline-none focus:border-primary transition">
            <p class="text-xs text-gray-500 mt-1">Leave blank to keep current image.</p>
            @error('image_file') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="pt-4 flex justify-end">
        <button type="submit" class="bg-black text-white px-8 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
            Update Certificate
        </button>
    </div>
</form>
@endsection
