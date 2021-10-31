<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_card',
        'payment_date',
        'filename',
        'comperegis_id',
        'method',
        'filepath'
    ];
}
