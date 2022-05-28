<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'address',
        'telephone',
        'email',
        'twitter',
        'facebook',
        'whatsapp',
        'instagram',
        'map',
    ];
}
