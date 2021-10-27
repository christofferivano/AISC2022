<?php

namespace App\Http\Controllers\Competition\Poster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PosterCompetitionController extends Controller
{
    public function index()
    {
        return view('competition-poster');
    }

    public function register(){
        return view('postercompe-regis');
    }
}
