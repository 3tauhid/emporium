<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\Models\User;

class NewPasswordController extends Controller
{
    public function create()
    {
        return view('reset-password', [

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required'],
        ]);

        $user = User::find(auth()->id());

        $errors = new MessageBag();

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();

            event(new PasswordReset($user));
        } else {
            $errors->add('general', 'The old password does not match.');
        }

        if ($errors->any()) {
            return back()->withInput()->withErrors($errors);
        }

        return redirect(route('profile.show'));
    }
}
