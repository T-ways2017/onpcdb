<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\firefighter;


class Center extends Model
{
    use HasFactory;

    //One Center has many CFiregthters

    public function firefighters()
    {
        return $this->hasMany('App\Models\Firefighter');

    }
}


