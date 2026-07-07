@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Expertises</h1>
        <p class="text-gray-500 mt-2 font-medium">Manage your software, tools, and technical skills.</p>
    </div>
    <a href="{{ route('admin.expertises.create') }}" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
        + Add New
    </a>
</div>

<div class="bg-white border-2 border-black rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-black text-white uppercase text-xs font-black tracking-widest">
            <tr>
                <th class="p-4 border-b-2 border-black">Skill / Tool Name</th>
                <th class="p-4 border-b-2 border-black">Category</th>
                <th class="p-4 border-b-2 border-black text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y-2 divide-black">
            @forelse($expertises as $expertise)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 font-bold flex items-center gap-3">
                    @if($expertise->logo_path)
                        <img src="{{ asset($expertise->logo_path) }}" class="w-8 h-8 object-contain">
                    @else
                        <div class="w-8 h-8 bg-gray-200"></div>
                    @endif
                    {{ $expertise->name }}
                </td>
                <td class="p-4 font-medium">{{ $expertise->category }}</td>
                <td class="p-4 text-right flex justify-end gap-2">
                    <a href="{{ route('admin.expertises.edit', $expertise) }}" class="border-2 border-black px-3 py-1 text-xs font-black uppercase hover:bg-black hover:text-white transition">Edit</a>
                    <form action="{{ route('admin.expertises.destroy', $expertise) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-2 border-red-600 text-red-600 px-3 py-1 text-xs font-black uppercase hover:bg-red-600 hover:text-white transition">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="p-8 text-center text-gray-500 font-bold uppercase tracking-widest">No expertises found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
