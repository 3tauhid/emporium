<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class UserImage extends Model
{
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $uuid = Str::uuid();

            if (empty($model->uuid)) {
                $model->uuid = $uuid;
            }

            if (empty($model->disk)) {
                $model->disk = 'local';
            }

            if (empty($model->url)) {
                $model->url = route('user-images.show', $uuid) . "?v=" . uniqid(); // "v" parameter is for Cache Busting
            }
        });
    }
}
