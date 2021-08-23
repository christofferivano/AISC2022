<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerRegistrationPage2 extends Controller
{
    public function index(String $name, String $radio, String $major, String $batch){
        return view('volunteer-regis-2', [
            'name' => $name,
            'radio' => $radio,
            'major' => $major,
            'batch' => $batch
        ]);
    }

    public function store(Request $request, String $name, String $radio, String $major, String $batch){
        $this->validate($request, [
            'domicile' => 'required|max:255',
            'email' => 'required|max:255|email',
            'wa' => 'required',
            'line' => 'required',
            'position1' => 'required',
            'position2' => 'required',
        ]);

        return redirect()->route('volunteer-regis-3-get', [
            'name' => $name,
            'radio' => $radio,
            'major' => $major,
            'batch' => $batch,
            'domicile' => $request->domicile,
            'email' => $request->email,
            'wa' => $request->wa,
            'line' => $request->line,
            'position1' => $request->position1,
            'position2' => $request->position2,
        ]);
    }
}
