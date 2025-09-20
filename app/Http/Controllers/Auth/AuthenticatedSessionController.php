<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('signin', [

        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        $user = User::where('email', $email)->first();

        $errors = new MessageBag();

        if (isset($user->id)) {
            if (Hash::check($password, $user->password) == 0) {
                $errors->add('general', 'The password does not match.');
            } else {
                if ($user->is_active == 0) {
                    $errors->add('general', 'The account is blocked.');
                }
            }
        } else
        {
            $errors->add('general', 'The user does not exist.');
        }

        if ($errors->any()) {
            return back()->withInput()->withErrors($errors);
        }

        auth()->loginUsingId($user->id, $remember ?? false);

        $request->session()->regenerate();

        return redirect()->intended(route('profile.show'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('homepage'));
    }
}
