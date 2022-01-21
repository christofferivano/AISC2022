<?php

namespace App\Http\Controllers\Conference\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conf;
use App\Models\Conf_file;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Exports\Conference;

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

    public function export(){
        $date = Carbon::now()->toDateTimeString();
        return Excel::download(new Conference, $date.'conference.xlsx');
    }
}
