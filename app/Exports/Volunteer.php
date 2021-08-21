<?php

namespace App\Exports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollenction;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Exports\VolunteerRegistrationExport;
use App\Models\volregis;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;

class Volunteer implements FromCollection, WithHeadings
{

    public function headings():array{
        return[
            'id',
            'submited_at',
            'edited_at',
            'full_name', 
            'institution', 
            'major', 
            'batch', 
            'domicile', 
            'email', 
            'line_id', 
            'phone_number', 
            'position_1', 
            'position_2', 
            'twibbon_link', 
            'proof_link'
        ];
    }

    public function collection(){
        // $time = Carbon::now();
        // $fix_time = $time->toDateTimeString();
        //return Excel::download(new VolunteerRegistrationExport, '_Volunteer_Registration.xlsx');
        return collect(volregis::getVolregis());
    }
}
