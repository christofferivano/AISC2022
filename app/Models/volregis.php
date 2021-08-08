<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volregis extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'institution',
        'major',
        'batch',
        'domicile',
        'email',
        'phone_number',
        'line_id',
        'position_1',
        'position_2'
    ];

    public function file(){
        return $this->hasMany(File::class);
    }
}
