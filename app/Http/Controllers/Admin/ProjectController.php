<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'short_description' => 'required|string',
            'full_description' => 'nullable|string',
            'image_file' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:5120', // 5MB max
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('projects', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'short_description' => 'required|string',
            'full_description' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:5120',
        ]);

        if ($request->hasFile('image_file')) {
            if ($project->image_path && !str_starts_with($project->image_path, 'assets/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $project->image_path));
            }
            $path = $request->file('image_file')->store('projects', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image_path && !str_starts_with($project->image_path, 'assets/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $project->image_path));
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
