<?php

namespace App\Exports;

use App\Models\volregis;
use Maatwebsite\Excel\Concerns\FromCollection;

class VolunteerRegistrationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return volregis::all();
    }
}
