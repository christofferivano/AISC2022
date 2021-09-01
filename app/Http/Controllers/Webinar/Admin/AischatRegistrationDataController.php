<?php

namespace App\Http\Controllers\Webinar\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chatregis;

class AischatRegistrationDataController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $registrator = Chatregis::paginate(20);
        //dd( $file->where('id', 9)->where('type', 'cv') );
        return view('admin-aischat', compact('registrator'));
    }

    public function delete(Chatregis $chatregis){
        $chatregis->delete();
        return back();
    }
}
