<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Experience;
use App\Models\Expertise;
use App\Models\Project;
use App\Models\SocialLink;

use App\Models\Certificate;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $experiences = Experience::all()->sortByDesc(function ($exp) {
            $parts = explode(' - ', $exp->year_range);
            return strtotime($parts[0] ?? '0');
        })->values();
        $expertises = Expertise::orderBy('sort_order')->get();
        $latestWorks = Project::orderBy('sort_order')->take(2)->get();
        $certificates = Certificate::orderBy('id', 'asc')->get();
        $socialLinks = SocialLink::orderBy('sort_order')->get();

        return view('home', compact('profile', 'experiences', 'expertises', 'latestWorks', 'certificates', 'socialLinks'));
    }
}
