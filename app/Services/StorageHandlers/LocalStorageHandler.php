<?php

namespace App\Services\StorageHandlers;

class LocalStorageHandler
{
    public static function store($file, string $path)
    {
        $uploadInfo['path'] = $file->store($path, 'local');

        return $uploadInfo;
    }

    public static function show(string $path)
    {
        return response()->file('storage/app/' . $path);
    }

    public static function url(int $id, string $routeName)
    {
        return route($routeName, $id);
    }
}
