<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerRegistrationPage extends Controller
{
    public function index(){
        return view('volunteer-regis');
    }

    public function third(){
        return view('volunteer-regis-3');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'radio' => 'required',
            'major' => 'required|max:255',
            'batch' => 'required',
        ]);

        return redirect()->route('volunteer-regis-2-get', [
            'name' => $request->name,
            'radio' => $request->radio,
            'major' => $request->major,
            'batch' => $request->batch,
        ]);
    }
}
