<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComparingFeature extends Model
{
    use SoftDeletes;
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
