<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Firefighter;

class Category extends Model
{
    use HasFactory;
    
    //One Cartegory has many Firegthters

     public function firefighters()
     {
         return $this->hasMany(Firefighter::class);
 
     }

}
