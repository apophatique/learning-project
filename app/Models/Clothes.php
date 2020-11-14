<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 'size', 'brand', 'type', 'name'
    ];
}
