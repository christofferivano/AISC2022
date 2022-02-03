<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conf extends Model
{
    use HasFactory;

    protected $table = 'conf';

    protected $fillable = [
        'name',
        'institution',
        'major',
        'email',
        'position',
        'document_link',
        'membership',
        'renew_membership',
        'contact_email_address',
        'graduation_date'
    ];

    public function conf_file(){
        return $this->hasOne(Conf_file::class, 'conference_id');
    }
}
