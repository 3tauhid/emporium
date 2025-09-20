<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\StorageHandlers\DynamicStorageHandler;

class ProductManufacturerImage extends Model
{
    use SoftDeletes;
    
    public function url()
    {
        return DynamicStorageHandler::url($this);
    }
}
