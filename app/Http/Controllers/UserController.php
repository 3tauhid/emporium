<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserImage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=' , 1)->get();

        return view('users', [
            'users' => $users,
        ]);
    }

    public function show($userId)
    {
        $user = User::with('user_image')->find($userId);

        return view('admin-user-profile', [
            'user' => $user,
        ]);
    }

    public function destroy($userId)
    {
        User::where('id', $userId)->delete();
        UserImage::where('user_id', $userId)->delete();

        session(['success_message' => 'Successfully Deleted']);

        return response()->noContent();
    }
}
