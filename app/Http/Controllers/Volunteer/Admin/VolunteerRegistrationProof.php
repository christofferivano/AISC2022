<?php

namespace App\Http\Controllers\Volunteer\Admin;

use App\Http\Controllers\Controller;
use App\Models\volregis;
use App\Models\File;
use Illuminate\Http\Request;

class VolunteerRegistrationProof extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(volregis $volregis){
        $files = $volregis->file;
        return view('adminpageshow', [
            'files' => $files,
        ]);
    }
}
