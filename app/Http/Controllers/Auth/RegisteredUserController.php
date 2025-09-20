<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:10'],
            'phone' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:50'],
        ]);

        if ($request->role == 'Customer') {
            $userRoleId = 3;
            $isActive = 1;
        }

        if ($request->role == 'Seller') {
            $userRoleId = 2;
            $isActive = 0;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_role_id' => $userRoleId,
            'phone' => $request->phone,
            'address' => $request->address,
            'is_active' => $isActive,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
