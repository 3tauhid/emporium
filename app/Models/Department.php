<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function comparing_features()
    {
        return $this->hasMany(ComparingFeature::class);
    }
}
