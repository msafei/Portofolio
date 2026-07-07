<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'desc')->get();
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issuing_organization' => 'required|string|max:255',
            'issue_date' => 'required|string|max:255',
            'expiration_date' => 'nullable|string|max:255',
            'credential_id' => 'nullable|string|max:255',
            'credential_url' => 'nullable|url|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:5120',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('certificates', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        unset($validated['image_file']);

        Certificate::create($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate created successfully.');
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issuing_organization' => 'required|string|max:255',
            'issue_date' => 'required|string|max:255',
            'expiration_date' => 'nullable|string|max:255',
            'credential_id' => 'nullable|string|max:255',
            'credential_url' => 'nullable|url|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:5120',
        ]);

        if ($request->hasFile('image_file')) {
            if ($certificate->image_path && !str_starts_with($certificate->image_path, 'assets/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $certificate->image_path));
            }
            $path = $request->file('image_file')->store('certificates', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        unset($validated['image_file']);

        $certificate->update($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate updated successfully.');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->image_path && !str_starts_with($certificate->image_path, 'assets/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $certificate->image_path));
        }
        
        $certificate->delete();

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate deleted successfully.');
    }
}
