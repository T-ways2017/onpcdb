<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    //One Center has many CFiregthters

    public function firefighters()
    {
        return $this->hasMany(Firefighter::class);

    }
}
