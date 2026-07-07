<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'asc')->get();
        return view('certificates.index', compact('certificates'));
    }
}
