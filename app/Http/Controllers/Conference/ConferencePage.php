<?php

namespace App\Http\Controllers\Conference;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferencePage extends Controller
{
    public function index(){
        return view ('conference-day');
    }
}
