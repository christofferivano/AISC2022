<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use App\Models\volregis;
use Illuminate\Http\Request;

class VolunteerRegistrationPage3 extends Controller
{
    public function index(String $name, String $radio, String $major, String $batch,
        String $domicile, String $email, String $wa, String $line, String $position1, String $position2){
            return view('volunteer-regis-3', [
                'name' => $name,
                'radio' => $radio,
                'major' => $major,
                'batch' => $batch,
                'domicile' => $domicile,
                'email' => $email,
                'wa' => $wa,
                'line' => $line,
                'position1' => $position1,
                'position2' => $position2,
            ]);
    }

    public function store(Request $request, String $name, String $radio, String $major, String $batch,
        String $domicile, String $email, String $wa, String $line, String $position1, String $position2){
            $this->validate($request, [
                'cv' => 'required|mimes:pdf,jpeg|max:2048',
                'portofolio' => 'mimes:pdf,jpeg|max:2048',
                'twibbon' => 'required|mimes:pdf,jpeg|max:2048',
                'ig_sharing' => 'required|mimes:pdf,jpeg|max:2048',
                'ig_follow' => 'required|mimes:pdf,jpeg|max:2048',
            ]);
    }
}
