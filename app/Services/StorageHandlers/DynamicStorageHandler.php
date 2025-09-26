<?php

namespace App\Services\StorageHandlers;

use Illuminate\Support\Facades\Storage;
use App\Services\StorageHandlers\LocalStorageHandler;
use App\Services\StorageHandlers\PublicStorageHandler;

class DynamicStorageHandler
{
    public static function store($file, string $path, string $disk)
    {
        if ($disk == 'local') {
            $uploadInfo = LocalStorageHandler::store($file, $path);
        }

        if ($disk == 'public') {
            $uploadInfo = PublicStorageHandler::store($file, $path);
        }

        $uploadInfo['original_name'] = $file->getClientOriginalName();

        return $uploadInfo;
    }

    public static function exists($model)
    {
        if ($model->disk == 'local' || $model->disk == 'public') {
            return Storage::disk($model->disk)->exists($model->path);
        }
    }

    // don't use show for public files; instead use url from model
    public static function show($model)
    {
        if (self::exists($model)) {
            if ($model->disk == 'local') {
                return LocalStorageHandler::show($model->path);
            }
        } else {
            abort(404);
        }
    }

    public static function getFileContents($model)
    {
        if (self::exists($model)) {
            if ($model->disk == 'public') {
                return PublicStorageHandler::getFileContents($model->path);
            }
        }
    }

    public static function delete($model)
    {
        if ($model->disk == 'local' || $model->disk == 'public') {
            return Storage::disk($model->disk)->delete($model->path);
        }
    }
}
