@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Projects</h1>
        <p class="text-gray-500 mt-2 font-medium">Manage your portfolio works and case studies.</p>
    </div>
    <a href="{{ route('admin.projects.create') }}" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
        + Add New
    </a>
</div>

<div class="bg-white border-2 border-black rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-black text-white uppercase text-xs font-black tracking-widest">
            <tr>
                <th class="p-4 border-b-2 border-black">Cover</th>
                <th class="p-4 border-b-2 border-black">Title</th>
                <th class="p-4 border-b-2 border-black">Category</th>
                <th class="p-4 border-b-2 border-black text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y-2 divide-black">
            @forelse($projects as $project)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4">
                    <img src="{{ asset($project->image_path) }}" class="w-16 h-10 object-cover border border-black">
                </td>
                <td class="p-4 font-bold">{{ $project->title }}</td>
                <td class="p-4 font-medium">{{ $project->category }}</td>
                <td class="p-4 text-right flex justify-end gap-2 items-center h-full mt-2">
                    <a href="{{ route('portfolio.show', $project) }}" target="_blank" class="border-2 border-gray-300 text-gray-500 px-3 py-1 text-xs font-black uppercase hover:bg-gray-100 transition">View</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="border-2 border-black px-3 py-1 text-xs font-black uppercase hover:bg-black hover:text-white transition">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-2 border-red-600 text-red-600 px-3 py-1 text-xs font-black uppercase hover:bg-red-600 hover:text-white transition">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-8 text-center text-gray-500 font-bold uppercase tracking-widest">No projects found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
