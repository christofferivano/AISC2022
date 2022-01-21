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
            'document_filename',
            'document_link'
        ];
    }
    public function collection()
    {
        //
        $export_to_excel = Conf::join('conf_file', 'conf.id', "=", 'conf_file.conference_id')
        ->select(['conf.*', 'conf_file.filename', DB::raw("CONCAT(\"127.0.0.1:8000/storage/file/\",filename) AS url")])->get();

        return collect($export_to_excel);
    }
}
