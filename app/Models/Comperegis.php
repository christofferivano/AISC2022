<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Models\Document;
use App\Models\Member;

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

    public function origin(){
        if (!$this->origin) return "Indonesia";
        else return "Internasional";
    }

    public function payment(){
        return $this->hasOne(Payment::class, 'comperegis_id');
    }

    public function document(){
        return $this->hasOne(Document::class, 'comperegis_id');
    }

    public function members(){
        return $this->hasMany(Member::class, 'comperegis_id');
    }
}
