<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comperegis;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = [
        'name_card',
        'payment_date',
        'filename',
        'comperegis_id',
        'method',
        'filepath'
    ];

    public function comperegis(){
        return $this->belongsTo(Comperegis::class, 'comperegis_id');
    }
}
