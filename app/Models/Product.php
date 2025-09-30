<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\DepartmentHelper;
use App\Services\StorageHandlers\DynamicStorageHandler;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    
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

    public function comparingFeatures()
    {
        return $this->hasMany(ComparingFeature::class, 'department_id', 'department_id');
    }

    public function comparingProducts()
    {
        return $this->hasMany(ComparingProduct::class, 'main_product_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'main_seller_id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productSummaries()
    {
        return $this->hasMany(ProductSummary::class);
    }

    public function productManufacturerImages()
    {
        return $this->hasMany(ProductManufacturerImage::class);
    }

    public function comparingValues()
    {
        return $this->hasMany(ComparingValue::class);
    }

    public function productFaqs()
    {
        return $this->hasMany(ProductFaq::class);
    }

    public function productReviews()
    {
        return $this->hasMany(ProductReview::class)->orderBy('rating', 'desc');
    }

    public function productSellers()
    {
        return $this->hasMany(ProductSeller::class);
    }

    public function getFileContents()
    {
        return DynamicStorageHandler::getFileContents($this);
    }
}
