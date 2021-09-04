<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'file_path',
        'type'
    ];

    // public function volregis(){
    //     return $this->belongsTo(volregis::class);
    // }

    public function chatregis(){
        return $this->belongsTo(Chatregis::class);
    }

    public function competenregis(){
        return $this->belongsTo(Competenregis::class);
    }
}
