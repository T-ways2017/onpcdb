<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Firefighter;

class Department extends Model
{
    use HasFactory;

     //One Department has many Firegthters

     public function firefighters()
     {
         return $this->hasMany(Firefighter::class);
 
     }
}
