<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Firefighter;

class Category extends Model
{
    use HasFactory;
    
/**
 * Get all of the firefighters for the Category
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function firefighters(): HasMany
{
    return $this->hasMany(Firefight::class);
}

}
