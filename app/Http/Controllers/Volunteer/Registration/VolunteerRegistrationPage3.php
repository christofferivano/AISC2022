<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use App\Models\volregis;
use Illuminate\Http\Request;
use App\Models\File;

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
                'twibbon_link' => 'required',
                'proof_link' => 'required'
            ]);

            $volregis = new volregis;
            $volregis->full_name = $name;
            $volregis->institution = $radio;
            $volregis->major = $major;
            $volregis->batch = $batch;
            $volregis->domicile = $domicile;
            $volregis->email = $email;
            $volregis->phone_number = $wa;
            $volregis->line_id = $line;
            $volregis->position_1 = $position1;
            $volregis->position_2 = $position2;
            $volregis->twibbon_link = $request->twibbon_link;
            $volregis->proof_link = $request->proof_link;

            $volregis->save();

            return redirect()->route('volunteer-end');
    }
}
