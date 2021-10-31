<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Institution;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'voucher';
    protected $fillable = [
        'jenis_voucher',
        'institution_id',
        'besar_potongan',
        'kode_voucher',
        'expired_date'
    ];

    public function institution(){
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
