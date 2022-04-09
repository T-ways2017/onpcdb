<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Firefighter;

class Department extends Model
{
    use HasFactory;

    /**
     * Get all of the Firefighter for the Department
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Firefighters(): HasMany
    {
        return $this->hasMany(Firefighter::class);
    }
}
