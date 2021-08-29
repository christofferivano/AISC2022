<?php

namespace App\Http\Controllers\Volunteer\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\volregis;

class VolunteerRegistrationDataController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $registrator = volregis::paginate(20);
        //dd( $file->where('id', 9)->where('type', 'cv') );
        return view('adminpage', compact('registrator'));
    }

    public function delete(volregis $volregis){
        $volregis->delete();
        return back();
    }
}
