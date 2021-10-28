<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comperegis extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'nama_tim',
        'total_pembayaran',
        'validation',
        'origin',
        'payment_method'
    ];
}
