<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'document';

    protected $fillable = [
        'filename',
        'filepath',
        'comperegis_id'
    ];

    public function comperegis(){
        return $this->belongsTo(Comperegis::class, 'comperegis_id');
    }
}
