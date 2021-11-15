<?php

namespace App\Http\Controllers\Competition\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comperegis;
use App\Models\Document;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class RegistrationDataController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index($type="Paper"){
        $registration = Comperegis::whereJenis($type)->orderBy('created_at', 'asc')->paginate(20);
        return view("competition_registration")->with(compact('registration', $registration));
    }

    public function payment_view($id){
        $payment = Comperegis::find($id)->payment;
        return view("payment_view")->with('payment', $payment);
    }

    public function members_view($id){
        $members = Comperegis::find($id)->members;
        return view("members_view")->with('members', $members);
    }

    public function validate_registration($id){
        $registration = Comperegis::find($id);
        $registration->validation = 1;
        $registration->save();    
        return redirect()->back();
    }
}
