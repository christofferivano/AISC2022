<?php

namespace App\Http\Controllers\SocialNight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialNightPage extends Controller
{
    public function index(){
        return view('sosnight');
    }
}
