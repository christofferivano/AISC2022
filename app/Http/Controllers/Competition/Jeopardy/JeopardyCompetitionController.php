<?php

namespace App\Http\Controllers\Competition\Jeopardy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JeopardyCompetitionController extends Controller
{
    public function index()
    {
        return view('competition-cheme');
    }
}
