<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    //
    protected $table = 'kos';
    protected $fillable = [
        'image',
        'name',
        'address',
        'city',
        'description',
        'type',
        'price',
        'contact_number',
    ];
}
