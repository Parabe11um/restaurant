<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $fillable = [
        'r_name',
        'r_description',
        'r_picture',
        'r_inn',
        'r_phone',
        'r_address',
        'r_site',
        'r_email',
        'r_tables',
    ];
}
