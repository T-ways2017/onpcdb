<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Center;
use App\Models\Department;
use App\Models\Category;
use App\Models\Promotion;


class Firefighter extends Model
{
    use HasFactory;

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function department()
    {
        return $this->belongsTo(Departement::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

}
