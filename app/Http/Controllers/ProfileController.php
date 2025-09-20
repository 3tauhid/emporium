<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = User::with('user_image')->find(auth()->id());
        
        return view('profile', [
            'user' => $user,
        ]);
    }

    public function edit()
    {
        $user = User::with('user_image')->find(auth()->id());

        return view('profile-edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'phone' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:50'],
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        
        User::where('id', auth()->id())->update(['name' => $name, 'phone' => $phone, 'address' => $address, 'email' => $email]);

        return redirect(route('profile.show'));
    }
}
