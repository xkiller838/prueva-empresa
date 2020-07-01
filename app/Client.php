<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    protected $fillable = [
        'cod', 'name', 'city'
    ];

    public function scopeBuscador($query, $buscar){

        return $query->where("city", "LIKE", "%".$buscar."%");

    }
}
