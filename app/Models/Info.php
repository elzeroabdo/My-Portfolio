<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'twitter',
        'github',
        'linkedin',
        'facebook',
        'email',
        'phone',
        'about',
        'resume',
        'cv',
        'avatar',
        'jop',
        'address',
        'website',
        'age',
        'degree',
    ];

}
