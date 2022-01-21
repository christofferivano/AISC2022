<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Conf;
use App\Models\Conf_file;
use Illuminate\Support\Facades\DB;

class Conference implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return [
            'id',
            'created_at',
            'updated_at',
            'name',
            'institution',
            'major',
            'email',
            'position',
            'document_link'
        ];
    }
    public function collection()
    {
        //
        $export_to_excel = Conf::select(['conf.*'])->get();

        return collect($export_to_excel);
    }
}
