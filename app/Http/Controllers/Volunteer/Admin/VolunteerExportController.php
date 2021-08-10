<?php

namespace App\Http\Controllers\Volunteer\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollenction;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Exports\VolunteerRegistrationExport;
use App\Models\volregis;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\Volunteer;
use App\Http\Controllers\Volunteer\Registration\VolunteerRegistrationPage;
use Maatwebsite\Excel\Facades\Excel;

class VolunteerExportController extends Controller
{

    public function index(){
        dd('tes');
    }

    public function exportExcel(){
        return Excel::download(new Volunteer, 'tex.xlsx');
    }

    public function exportCSV(){
        //return Excel::download(new Volunteer, 'volunteer.csv');
    }
}
