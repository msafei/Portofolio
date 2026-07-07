@extends('layouts.admin')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.experiences.index') }}" class="w-10 h-10 border-2 border-black flex items-center justify-center hover:bg-black hover:text-white transition">&larr;</a>
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Edit Experience</h1>
    </div>
</div>

<form action="{{ route('admin.experiences.update', $experience) }}" method="POST" enctype="multipart/form-data" class="space-y-8 bg-white border-2 border-black p-6 md:p-8 rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Company Name</label>
            <input type="text" name="company" value="{{ old('company', $experience->company) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('company') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Role / Position</label>
            <input type="text" name="role" value="{{ old('role', $experience->role) }}" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            @error('role') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>
        
        <div class="col-span-1 md:col-span-2">
            <label class="block text-sm font-black uppercase tracking-widest mb-2">Duration / Period</label>
            @php
                $start_val = '';
                $end_val = '';
                $parts = explode(' - ', old('year_range', $experience->year_range));
                if (count($parts) >= 1) {
                    $time = strtotime($parts[0]);
                    if ($time) $start_val = date('Y-m', $time);
                }
                if (count($parts) >= 2 && $parts[1] !== 'Present') {
                    $time = strtotime($parts[1]);
                    if ($time) $end_val = date('Y-m', $time);
                }
            @endphp
            <div class="flex flex-col md:flex-row items-center gap-4">
                <input type="month" id="start_month" value="{{ $start_val }}" class="w-full md:w-1/2 border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
                <span id="date_separator" class="font-black text-xl hidden md:block">-</span>
                <input type="month" id="end_month" value="{{ $end_val }}" class="w-full md:w-1/2 border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition" required>
            </div>
            <input type="hidden" name="year_range" id="year_range" value="{{ old('year_range', $experience->year_range) }}">
            @error('year_range') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
        </div>

        <div class="col-span-1 md:col-span-2 flex flex-wrap items-center gap-4 mt-2">
            <div class="flex items-center gap-4 border-2 border-black p-2">
                <input type="color" name="theme_color" id="theme_color" value="{{ old('theme_color', $experience->theme_color) }}" class="w-8 h-8 p-0 border-0 cursor-pointer">
                <label for="theme_color" class="text-sm font-black uppercase tracking-widest cursor-pointer pr-2">Theme Color</label>
            </div>
            <div class="flex items-center gap-4">
                <input type="checkbox" name="is_present" id="is_present" value="1" {{ old('is_present', $experience->is_present) ? 'checked' : '' }} class="w-6 h-6 border-2 border-black text-black focus:ring-black rounded-none">
                <label for="is_present" class="text-sm font-black uppercase tracking-widest">Is Present / Current Job?</label>
            </div>
            @error('is_present') <span class="text-red-500 text-xs font-bold w-full">{{ $message }}</span> @enderror
            @error('theme_color') <span class="text-red-500 text-xs font-bold w-full">{{ $message }}</span> @enderror
        </div>
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Description (Optional)</label>
        <textarea name="description" rows="4" class="w-full border-2 border-black p-3 focus:ring-0 focus:outline-none focus:border-primary transition">{{ old('description', $experience->description) }}</textarea>
        @error('description') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div>
        <label class="block text-sm font-black uppercase tracking-widest mb-2">Company Logo (Optional)</label>
        <input type="file" name="logo_file" accept="image/*" class="w-full border-2 border-black p-2 focus:ring-0 focus:outline-none focus:border-primary transition">
        @if($experience->logo_path)
            <div class="mt-2 flex items-center gap-4">
                <img src="{{ asset($experience->logo_path) }}" class="h-12 border-2 border-black p-1">
                <span class="text-xs font-bold text-gray-500">Current Logo</span>
            </div>
        @endif
        @error('logo_file') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end pt-4">
        <button type="submit" class="bg-black text-white px-8 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
            Update Experience
        </button>
    </div>
</form>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const isPresentCheckbox = document.getElementById('is_present');
    const endMonthInput = document.getElementById('end_month');
    const separator = document.getElementById('date_separator');
    const form = document.querySelector('form');
    const yearRangeInput = document.getElementById('year_range');

    function toggleEndMonth() {
        if (isPresentCheckbox.checked) {
            endMonthInput.classList.add('hidden');
            separator.classList.add('hidden');
            separator.classList.remove('md:block');
            endMonthInput.removeAttribute('required');
        } else {
            endMonthInput.classList.remove('hidden');
            separator.classList.remove('hidden');
            separator.classList.add('md:block');
            endMonthInput.setAttribute('required', 'required');
        }
    }

    isPresentCheckbox.addEventListener('change', toggleEndMonth);
    toggleEndMonth();

    function updateHiddenInput() {
        const start = document.getElementById('start_month').value;
        const end = document.getElementById('end_month').value;
        const isPresent = isPresentCheckbox.checked;
        
        const formatDate = (val) => {
            if(!val) return '';
            const [year, month] = val.split('-');
            const date = new Date(year, month - 1);
            return date.toLocaleString('en-US', { month: 'long', year: 'numeric' });
        };

        const startStr = formatDate(start);
        let endStr = isPresent ? 'Present' : formatDate(end);
        
        if (startStr) {
            yearRangeInput.value = startStr + ' - ' + endStr;
        }
    }

    document.getElementById('start_month').addEventListener('input', updateHiddenInput);
    document.getElementById('end_month').addEventListener('input', updateHiddenInput);
    isPresentCheckbox.addEventListener('change', updateHiddenInput);

    form.addEventListener('submit', function(e) {
        updateHiddenInput();
    });
});
</script>
@endpush
