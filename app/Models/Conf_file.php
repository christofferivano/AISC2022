<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conf_file extends Model
{
    use HasFactory;

    protected $table = 'conf_file';

    protected $appends = ['url'];

    protected $fillable = [
        'filename',
        'filepath',
        'conference_id'
    ];

    public function getUrlAttributes(){
        return '127.0.0.1:8000/storage/conference/'.$this->filename;
    }

    public function conference(){
        return $this->belongsTo(Conf::class, 'conference_id');
    }
}
