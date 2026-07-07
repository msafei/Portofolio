<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\SocialLink;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('sort_order', 'asc')->paginate(9);
        $socialLinks = SocialLink::orderBy('sort_order')->get();
        return view('portfolio.index', compact('projects', 'socialLinks'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $socialLinks = SocialLink::orderBy('sort_order')->get();
        return view('portfolio.show', compact('project', 'socialLinks'));
    }
}
