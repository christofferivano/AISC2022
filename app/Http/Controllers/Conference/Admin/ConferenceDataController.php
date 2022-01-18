<?php

namespace App\Http\Controllers\Conference\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conf;

class ConferenceDataController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $registrations = Conf::orderBy('created_at', 'asc')->paginate(20);
        return view('admin-conference', ['registration' => $registrations]);
    }

    public function delete($id){
        $data = Conf::find($id);
        $data->delete();
        return redirect()->route('admin-conference');
    }
}
