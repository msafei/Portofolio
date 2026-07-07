@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Experiences</h1>
        <p class="text-gray-500 mt-2 font-medium">Manage your work history and positions.</p>
    </div>
    <a href="{{ route('admin.experiences.create') }}" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
        + Add New
    </a>
</div>

<div class="bg-white border-2 border-black rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-black text-white uppercase text-xs font-black tracking-widest">
            <tr>
                <th class="p-4 border-b-2 border-black">Company</th>
                <th class="p-4 border-b-2 border-black">Role</th>
                <th class="p-4 border-b-2 border-black">Year</th>
                <th class="p-4 border-b-2 border-black">Present</th>
                <th class="p-4 border-b-2 border-black text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y-2 divide-black">
            @forelse($experiences as $experience)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 font-bold flex items-center gap-3">
                    @if($experience->logo_path)
                        <img src="{{ asset($experience->logo_path) }}" class="w-8 h-8 object-contain">
                    @else
                        <div class="w-8 h-8 bg-gray-200"></div>
                    @endif
                    {{ $experience->company }}
                </td>
                <td class="p-4 font-medium">{{ $experience->role }}</td>
                <td class="p-4 font-medium">{{ $experience->year_only_range }}</td>
                <td class="p-4 font-medium">
                    @if($experience->is_present)
                        <span class="bg-black text-white px-2 py-1 text-[10px] font-black uppercase">Yes</span>
                    @else
                        <span class="text-gray-400 font-bold text-xs">No</span>
                    @endif
                </td>
                <td class="p-4 text-right flex justify-end gap-2">
                    <a href="{{ route('admin.experiences.edit', $experience) }}" class="border-2 border-black px-3 py-1 text-xs font-black uppercase hover:bg-black hover:text-white transition">Edit</a>
                    <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-2 border-red-600 text-red-600 px-3 py-1 text-xs font-black uppercase hover:bg-red-600 hover:text-white transition">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-8 text-center text-gray-500 font-bold uppercase tracking-widest">No experiences found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
