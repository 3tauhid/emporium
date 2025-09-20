<?php

namespace App\Services\StorageHandlers;

class PublicStorageHandler
{
    public static function store($file, string $path)
    {
        $uploadInfo['path'] = $file->store($path, 'public');

        $uploadInfo['url'] = '/storage/' . $uploadInfo['path'];

        return $uploadInfo;
    }

    public static function getFileContents(string $path)
    {
        return 'data://application/octet-stream;base64,' . base64_encode(file_get_contents('storage/app/public/' . $path));
    }
}
