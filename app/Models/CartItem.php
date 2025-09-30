<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
    use SoftDeletes;
    
    public function productSeller()
    {
        return $this->belongsTo(ProductSeller::class);
    }
}
