<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certificate;

use App\Models\SocialLink;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'asc')->get();
        $socialLinks = SocialLink::orderBy('sort_order')->get();
        return view('certificates.index', compact('certificates', 'socialLinks'));
    }
}
