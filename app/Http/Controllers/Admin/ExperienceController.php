<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all()->sortByDesc(function ($exp) {
            $parts = explode(' - ', $exp->year_range);
            return strtotime($parts[0] ?? '0');
        })->values();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'year_range' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'nullable|string',
            'theme_color' => 'nullable|string|max:20',
            'is_present' => 'boolean',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $validated['is_present'] = $request->has('is_present');

        if ($request->hasFile('logo_file')) {
            $path = $request->file('logo_file')->store('experiences', 'public');
            $validated['logo_path'] = 'storage/' . $path;
        }

        unset($validated['logo_file']);

        Experience::create($validated);

        return redirect()->route('admin.experiences.index')->with('success', 'Experience created successfully.');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'year_range' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'nullable|string',
            'theme_color' => 'nullable|string|max:20',
            'is_present' => 'boolean',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $validated['is_present'] = $request->has('is_present');

        if ($request->hasFile('logo_file')) {
            if ($experience->logo_path && !str_starts_with($experience->logo_path, 'assets/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $experience->logo_path));
            }
            $path = $request->file('logo_file')->store('experiences', 'public');
            $validated['logo_path'] = 'storage/' . $path;
        }

        unset($validated['logo_file']);

        $experience->update($validated);

        return redirect()->route('admin.experiences.index')->with('success', 'Experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        if ($experience->logo_path && !str_starts_with($experience->logo_path, 'assets/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $experience->logo_path));
        }
        
        $experience->delete();

        return redirect()->route('admin.experiences.index')->with('success', 'Experience deleted successfully.');
    }
}
