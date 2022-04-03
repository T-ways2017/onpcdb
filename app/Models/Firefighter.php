<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firefighter extends Model
{
    use HasFactory;
    /**
     * Get the Center that owns the Firefighter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
      
    public function center()
    {
        return $this->belongsTo(Center::Class);
    } 


    
    public function Department(): BelongsTo
    {
        return $this->belongsTo(Department::class);

    }

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);

    }
}
