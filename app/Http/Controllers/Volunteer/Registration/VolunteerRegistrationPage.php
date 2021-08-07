<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class VolunteerRegistrationPage extends Controller
{

    protected String $name, $institution, $major, $batch;
    protected String $domicile, $email, $wa, $line, $position1, $position2;


    public function index(){
        return view('volunteer-regis');
    }

    public function index_2(){
        return view('volunteer-regis-2');
    }

    public function index_3(){
        return view('volunteer-regis-3');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'radio' => 'required',
            'major' => 'required|max:255',
            'batch' => 'required',
        ]);

        $this->name = $request->name;
        $this->institution = $request->radio;
        $this->major = $request->major;
        $this->batch = $request->batch;

        return redirect()->route('volunteer-regis-2-get');
    }

    public function store_2(Request $request){
        $this->validate($request, [
            'domicile' => 'required|max:255',
            'email' => 'required|max:255',
            'wa' => 'required',
            'line' => 'required',
            'position1' => 'required',
            'position2' => 'required',
        ]);

        $this->domicile = $request->domicile;
        $this->email = $request->email;
        $this->wa = $request->wa;
        $this->line = $request->line;
        $this->position1 = $request->position1;
        $this->position2 = $request->position2;

        return redirect()->route('volunteer-regis-3-get');
    }

    public function store_3(Request $request){

    }
}
