<?php

namespace App\Http\Controllers\Competency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competenregis;
use Exception;


class CompetencyController extends Controller
{
    
    // public function __construct(){
    //     $this->middleware(['auth']);
    // }

    public function index(){
        return view('aiscompetencyright');
    }

    public function end(){
        return view('aiscompetencydone');
    }

    public function registration_1(){
        return view('aiscomperegis');
    }

    public function registration_2(){
        return view('aiscomperegis2');
    }

    public function store_1(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'email' => 'required',
            'wa' => 'required',
        ]);

        $regis1 = array(
            'name' => $request->name,
            'place' => $request->place,
            'email' => $request->email,
            'wa' => $request->wa
        );

        return view('aiscomperegis2', ['regis1' => $regis1]);
    }

    public function store_2(Request $request, $name, $place, $email, $wa){
        
        $this->validate($request, [
            'info' => 'required',
            'expect' => 'required'
        ]);
        $temp = "'".$wa;
        try {
            Competenregis::create([
                'name' => $name,
                'place' => $place,
                'email' => $email,
                'wa' => $temp,
                'source' => $request->info,
                'expect' => $request->expect
            ]);
        }
        catch (Exception $e) { // It's actually a QueryException but this works too
            if ($e->getCode() == 23000) {
                // Deal with duplicate key error 
                $error = $e->getMessage(); 
                return view('errors.1062', ['error' => $error]);
            }
        }

        return redirect()->route('competency-regis-end');
    }
}
