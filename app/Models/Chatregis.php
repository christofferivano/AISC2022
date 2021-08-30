<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'expect'
    ];
}
