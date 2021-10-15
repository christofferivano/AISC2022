<?php

namespace App\Http\Controllers\Webinar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chatregis;
use Exception;

class WebinarPage extends Controller
{
    // public function __construct(){
    //     $this->middleware(['auth']);
    // }
    public function index(){
        return view('aischat-available');
    }

    public function index_k(){
        return view('aischat-kosong');
    }


    public function createStep1(Request $request){
        $chatregis = $request->session()->get('chatregis');
        return view('aischat-regis-1', compact('chatregis', $chatregis));
    }

    public function postCreateStep1(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'place' => 'required',
            'major' => 'required',
            'email' => 'required|email',
            'wa' => 'required'
        ]);

        if (empty($request->session()->get('chatregis'))){
            $chatregis = new Chatregis();
            $chatregis->fill($validatedData);
            $request->session()->put('chatregis', $chatregis);
        }
        else{
            $chatregis = $request->session()->get('chatregis');
            $chatregis->fill($validatedData);
            $request->session()->put('chatregis', $chatregis);
        }
        // dd('success');
        return redirect()->route('aischat-regis-two');
    }

    public function createStep2(Request $request){
        $chatregis = $request->session()->get('chatregis');
        return view('aischat-regis-2', compact('chatregis', $chatregis));
    }

    public function postCreateStep2(Request $request){
        $validatedData = $request->validate([
            'source' => 'required',
            'expect' => 'required'
        ]);
        if (empty($request->session()->get('chatregis'))){
            $chatregis = new Chatregis();
            $chatregis->fill($validatedData);
            $request->session()->put('chatregis', $chatregis);
        }
        else{
            $chatregis = $request->session()->get('chatregis');
            $chatregis->fill($validatedData);
            $request->session()->put('chatregis', $chatregis);
        }
        return redirect()->route('aischat-regis-end');
    }

    public function registration_3(Request $request){
        $chatregis = $request->session()->get('chatregis');
        $chatregis->save();
        $request->session()->forget('chatregis');
        return view('aischat-regis-end');
    }

    public function payment_method(Request $request){
        $this->validate($request,[
            'radio' => 'required'
        ]);

        return view('payment-bca');
    }
}
