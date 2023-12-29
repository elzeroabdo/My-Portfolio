<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // images is a json column
    protected $casts = [
        'images' => 'array'
    ];

}
