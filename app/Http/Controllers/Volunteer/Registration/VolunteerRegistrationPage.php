<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerRegistrationPage extends Controller
{
    public function index(){
        return view('volunteer-regis');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'institution' => 'required|max:255',
            'birth_date' => 'required',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'volunteer_in' => 'required',
        ]);
    }
}
