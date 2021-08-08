<?php

namespace App\Http\Controllers\Volunteer\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\volregis;

class VolunteerRegistrationDataController extends Controller
{
    public function index(){
        $registrator = volregis::all();
        $file = File::all();
        //dd( $file->where('id', 9)->where('type', 'cv') );
        return view('adminpage',[
            'registrator' => $registrator,
            'file' => $file
        ]);
    }
}
