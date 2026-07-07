<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Expertise;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'experiences' => Experience::count(),
            'expertises' => Expertise::count(),
            'projects' => Project::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
