<?php

namespace App\Exports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollenction;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Exports\VolunteerRegistrationExport;
use App\Models\Chatregis;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;

class Aischat implements FromCollection, WithHeadings
{

    public function headings():array{
        return[
            'id',
            'submited_at',
            'edited_at',
            'name', 
            'place', 
            'major', 
            'email', 
            'wa', 
            'source', 
            'expectation',
        ];
    }

    public function collection(){
        // $time = Carbon::now();
        // $fix_time = $time->toDateTimeString();
        //return Excel::download(new VolunteerRegistrationExport, '_Volunteer_Registration.xlsx');
        return collect(Chatregis::getChatregis());
    }
}
