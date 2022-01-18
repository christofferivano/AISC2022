<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conf_file extends Model
{
    use HasFactory;

    protected $table = 'conf_file';

    protected $fillable = [
        'filename',
        'filepath',
        'conference_id'
    ];

    public function conference(){
        return $this->belongsTo(Conf::class, 'conference_id');
    }
}
