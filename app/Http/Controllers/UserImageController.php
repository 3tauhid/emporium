<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;
use App\Services\StorageHandlers\DynamicStorageHandler;

class UserImageController extends Controller
{
    public function show($userImageUuid)
    {
        $userImage = UserImage::where('uuid', $userImageUuid)->first();

        return DynamicStorageHandler::show($userImage);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5000'], // 5MB
        ]);

        $uploadInfo = DynamicStorageHandler::store($request->file('image'), 'user-images', 'local');

        $userImage = UserImage::where('user_id', auth()->id())->first();

        if (isset($userImage->id)) {
            UserImage::where('user_id', auth()->id())
            ->update([
                'path' => $uploadInfo['path'],
                'original_name' => $uploadInfo['original_name']
            ]);
        } else {
            $userImage = UserImage::create([
                'user_id' => auth()->id(),
                'path' => $uploadInfo['path'],
                'original_name' => $uploadInfo['original_name'],
            ]);
        }

        session(['success_message' => $uploadInfo['original_name'] . ' has been uploaded.']);
        
        return response()->noContent();
    }
}
