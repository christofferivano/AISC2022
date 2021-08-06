<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volregis extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'institution',
        'birth_date',
        'email',
        'phone_number',
        'volunteer_in',
    ];
}
