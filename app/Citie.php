<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    protected $table = "cities";

    protected $fillable = [
        'cod', 'name'
    ];
}
