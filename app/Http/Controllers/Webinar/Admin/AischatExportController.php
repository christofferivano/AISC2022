<?php

namespace App\Http\Controllers\Webinar\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollenction;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Exports\VolunteerRegistrationExport;
use App\Models\Chatregis;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\Aischat;
use App\Http\Controllers\Volunteer\Registration\VolunteerRegistrationPage;
use Maatwebsite\Excel\Facades\Excel;

class AischatExportController extends Controller
{
    public function exportExcel(){
        $date = Carbon::now()->toDateTimeString();
        return Excel::download(new Aischat, $date.'_aischatregis.xlsx');
    }

    public function exportCSV(){
        //return Excel::download(new Volunteer, 'volunteer.csv');
    }
}
