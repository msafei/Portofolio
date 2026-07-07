@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-4xl font-black uppercase tracking-tighter">Certificates</h1>
        <p class="text-gray-500 mt-2 font-medium">Manage your professional certifications and licenses.</p>
    </div>
    <a href="{{ route('admin.certificates.create') }}" class="bg-black text-white px-6 py-3 text-sm font-black uppercase tracking-widest hover:bg-primary transition shadow-[4px_4px_0px_0px_#ea580c] hover:-translate-y-1 hover:shadow-[6px_6px_0px_0px_#ea580c]">
        + Add New
    </a>
</div>

<div class="bg-white border-2 border-black rounded-lg shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] overflow-hidden overflow-x-auto">
    <table class="w-full text-left min-w-max">
        <thead class="bg-black text-white uppercase text-xs font-black tracking-widest">
            <tr>
                <th class="p-4 border-b-2 border-black">Name</th>
                <th class="p-4 border-b-2 border-black">Organization</th>
                <th class="p-4 border-b-2 border-black">Issue Date</th>
                <th class="p-4 border-b-2 border-black">Credential ID</th>
                <th class="p-4 border-b-2 border-black text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y-2 divide-black">
            @forelse($certificates as $certificate)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 font-bold max-w-[200px] truncate" title="{{ $certificate->name }}">{{ $certificate->name }}</td>
                <td class="p-4 font-medium">{{ $certificate->issuing_organization }}</td>
                <td class="p-4 font-medium">{{ $certificate->issue_date }}</td>
                <td class="p-4 font-medium text-gray-500">{{ $certificate->credential_id ?? '-' }}</td>
                <td class="p-4 text-right flex justify-end gap-2 items-center">
                    @if($certificate->credential_url)
                    <a href="{{ $certificate->credential_url }}" target="_blank" class="border-2 border-gray-300 text-gray-500 px-3 py-1 text-xs font-black uppercase hover:bg-gray-100 transition">View</a>
                    @endif
                    <a href="{{ route('admin.certificates.edit', $certificate) }}" class="border-2 border-black px-3 py-1 text-xs font-black uppercase hover:bg-black hover:text-white transition">Edit</a>
                    <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-2 border-red-600 text-red-600 px-3 py-1 text-xs font-black uppercase hover:bg-red-600 hover:text-white transition">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-8 text-center text-gray-500 font-bold uppercase tracking-widest">No certificates found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
