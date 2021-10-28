<?php

namespace App\Http\Controllers\Competition\Paper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaperCompetitionController extends Controller
{
    public function index()
    {
        return view('competition-paper');
    }

    public function register(){
        return view('papercompe-regis');
    }
}
