<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competenregis extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place',
        'email',
        'wa',
        'source',
        'expect',
        'status'
    ];

    public function files(){
        return $this->hasOne(File::class);
    }
}
