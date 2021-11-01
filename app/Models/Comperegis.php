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

    public function currency(){
        if ($this->total_pembayaran<1000){
            $string = '$'.$this->total_pembayaran;
            return $string;
        }
        else {
            $string = 'Rp.'.($this->total_pembayaran/1000).'.000';
            return $string;
        }
    }
}
