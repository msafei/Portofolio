<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile.index', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Profile::first();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'portfolio_subtitle' => 'required|string|max:255',
            'start_year' => 'required|integer',
            'bio' => 'required|string',
            'email' => 'required|email|max:255',
            'media_type' => 'required|in:video,image',
            'media_title' => 'required|string|max:255',
            'media_subtitle' => 'required|string|max:255',
            'media_file' => 'nullable|file|mimes:mp4,jpg,jpeg,png,webp|max:20480', // 20MB max
            'resume_file' => 'nullable|file|mimes:pdf|max:10240', // 10MB max
        ]);

        if ($request->hasFile('media_file')) {
            // Delete old
            if ($profile->media_path && !str_starts_with($profile->media_path, 'assets/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $profile->media_path));
            }
            $path = $request->file('media_file')->store('profile', 'public');
            $validated['media_path'] = 'storage/' . $path;
        }

        if ($request->hasFile('resume_file')) {
            if ($profile->resume_link && !str_starts_with($profile->resume_link, 'assets/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $profile->resume_link));
            }
            $path = $request->file('resume_file')->store('resumes', 'public');
            $validated['resume_link'] = 'storage/' . $path;
        }

        // Unset files from validated array to update db correctly
        unset($validated['media_file']);
        unset($validated['resume_file']);

        $profile->update($validated);

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
    }
}
