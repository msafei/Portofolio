<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expertise;
use Illuminate\Support\Facades\Storage;

class ExpertiseController extends Controller
{
    public function index()
    {
        $expertises = Expertise::orderBy('id', 'asc')->get();
        return view('admin.expertises.index', compact('expertises'));
    }

    public function create()
    {
        return view('admin.expertises.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        if ($request->hasFile('logo_file')) {
            $path = $request->file('logo_file')->store('expertises', 'public');
            $validated['logo_path'] = 'storage/' . $path;
        }

        unset($validated['logo_file']);

        Expertise::create($validated);

        return redirect()->route('admin.expertises.index')->with('success', 'Expertise created successfully.');
    }

    public function edit(Expertise $expertise)
    {
        return view('admin.expertises.edit', compact('expertise'));
    }

    public function update(Request $request, Expertise $expertise)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        if ($request->hasFile('logo_file')) {
            if ($expertise->logo_path && !str_starts_with($expertise->logo_path, 'assets/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $expertise->logo_path));
            }
            $path = $request->file('logo_file')->store('expertises', 'public');
            $validated['logo_path'] = 'storage/' . $path;
        }

        unset($validated['logo_file']);

        $expertise->update($validated);

        return redirect()->route('admin.expertises.index')->with('success', 'Expertise updated successfully.');
    }

    public function destroy(Expertise $expertise)
    {
        if ($expertise->logo_path && !str_starts_with($expertise->logo_path, 'assets/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $expertise->logo_path));
        }
        
        $expertise->delete();

        return redirect()->route('admin.expertises.index')->with('success', 'Expertise deleted successfully.');
    }
}
