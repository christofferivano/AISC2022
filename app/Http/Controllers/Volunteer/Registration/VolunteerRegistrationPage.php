<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerRegistrationPage extends Controller
{
    public function index(){
        return view('volunteer-regis');
    }
}
