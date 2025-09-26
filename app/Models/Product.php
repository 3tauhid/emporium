<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\DepartmentHelper;
use App\Services\StorageHandlers\DynamicStorageHandler;

class Product extends Model
{
    use SoftDeletes;
    
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });

        $query->when($filters['order-by'] ?? false, function($query, $order_by) {
            if ($order_by == 'price-desc') {
                $query->orderBy('price', 'desc');
            }

            if ($order_by == 'price-asc') {
                $query->orderBy('price');
            }
        });

        $query->when($filters['department'] ?? false, function($query, $mainDepartmentId) {
            $childDepartmentIds = DepartmentHelper::getChildDepartmentIds($mainDepartmentId);

            foreach ($childDepartmentIds as $deptId)
            {
                $query->orWhere('department_id', $deptId);
            }
        });

        $query->when($filters['rating'] ?? false, function($query, $rating) {
            $query->where('average_rating', '>=', $rating)->where('average_rating', '<', $rating+1);
        });

        $query->when($filters['minimum-price'] ?? false, function($query, $minimumPrice) {
            $query->where('price', '>=', $minimumPrice);
        });

        $query->when($filters['maximum-price'] ?? false, function($query, $maximumPrice) {
            $query->where('price', '<=', $maximumPrice);
        });
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function comparing_features()
    {
        return $this->hasMany(ComparingFeature::class, 'department_id', 'department_id');
    }

    public function comparing_products()
    {
        return $this->hasMany(ComparingProduct::class, 'main_product_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'main_seller_id');
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function product_summaries()
    {
        return $this->hasMany(ProductSummary::class);
    }

    public function product_manufacturer_images()
    {
        return $this->hasMany(ProductManufacturerImage::class);
    }

    public function comparing_values()
    {
        return $this->hasMany(ComparingValue::class);
    }

    public function product_faqs()
    {
        return $this->hasMany(ProductFaq::class);
    }

    public function product_reviews()
    {
        return $this->hasMany(ProductReview::class)->orderBy('rating', 'desc');
    }

    public function product_sellers()
    {
        return $this->hasMany(ProductSeller::class);
    }

    public function getFileContents()
    {
        return DynamicStorageHandler::getFileContents($this);
    }
}
