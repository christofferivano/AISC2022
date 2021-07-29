<?php

namespace App\Http\Controllers\Competition;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompetitionPage extends Controller
{
    public function index()
    {
        return view('competition');
    }
}
