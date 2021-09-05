<?php

namespace App\Http\Controllers\Webinar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chatregis;
use Exception;

class WebinarPage extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        return view('aischat-available');
    }

    public function index_k(){
        return view('aischat-kosong');
    }

    public function registration_1(){
        return view('aischat-regis-1');
    }

    public function registration_2(){
        return view('aischat-regis-2');
    }

    public function registration_3(){
        return view('aischat-regis-end');
    }

    public function store_2(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'major' => 'required',
            'email' => 'required|email',
            'wa' => 'required'
        ]);

        $regis1 = collect([
            'name' => $request->name,
            'place' => $request->place,
            'email' => $request->email,
            'major' => $request->major,
            'wa' => $request->wa,
        ]);
        return view('aischat-regis-2', ['regis1' => $regis1]);
    }

    public function store_3(Request $request, $name, $email, $major, $wa, $place){
        $this->validate($request, [
            'info' => 'required',
            'expectation' => 'required'
        ]);

        $temp = "'".$wa;
        try {
            Chatregis::create([
                'name' => $name,
                'place' => $place,
                'email' => $email,
                'major' => $major,
                'wa' => $temp,
                'source' => $request->info,
                'expect' => $request->expectation
            ]);
        } 
        catch (Exception $e) { // It's actually a QueryException but this works too
            if ($e->getCode() == 23000) {
                // Deal with duplicate key error 
                $error = $e->getMessage(); 
                return view('errors.1062', ['error' => $error]);
            }
        }
        return view('aischat-regis-end');
    }

    public function payment_method(Request $request){
        $this->validate($request,[
            'radio' => 'required'
        ]);

        

        return view('payment-bca');
    }
}
