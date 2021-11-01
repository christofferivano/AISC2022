<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comperegis;
use App\Models\Voucher;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';

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

    public function voucher(){
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }

    public function comperegis(){
        return $this->belongsTo(Comperegis::class, 'comperegis_id');
    }

    public function currency(){
        if ($this->biaya_pendaftaran<1000){
            $string = '$'.$this->total_pembayaran;
            return $string;
        }
        else {
            $string = 'Rp.'.($this->biaya_pendaftaran/1000).'.000';
            return $string;
        }
    }
}
