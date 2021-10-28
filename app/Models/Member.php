<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'institution',
        'email',
        'phone_number',
        'jenis_member',
        'biaya_pendaftaran',
        'comperegis_id',
        'voucher_id'
    ];
}
