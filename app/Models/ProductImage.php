<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\StorageHandlers\DynamicStorageHandler;

class ProductImage extends Model
{
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function isWideImage()
    {
        $image = DynamicStorageHandler::getFileContents($this);
        
        if ($image) {
            $imgSize = getimagesize($image);
        
            if ($imgSize[0] > $imgSize[1]) {
                return true;
            } else {
                return false;
            }
        }
    }
}
