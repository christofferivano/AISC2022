<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Chatregis extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'place',
        'email',
        'major',
        'wa',
        'source',
        'expect',
        'status'
    ];

    public static function getChatregis(){
        $records = Chatregis::all();
        return $records;
    }

    public function files(){
        return $this->hasOne(File::class);
    }
}
