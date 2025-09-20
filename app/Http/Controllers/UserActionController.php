<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Vendor\Tauhid\Pagination\Pagination;

class UserActionController extends Controller
{
    public function search()
    {
        $search = request('search');

        $users = User::where('id', '!=' , 1)
        ->where(function($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
            $query->orWhere('email', 'like', '%' . $search . '%');
        })
        ->get();

        $content = view('partials._user-list', [
            'users' => $users,
        ])->render();

        return response()->json(['content'=> $content], 200);
    }

    public function inactiveSellers()
    {
        $users = User::where('is_active', 0)->seller()
        ->paginate()
        ->withQueryString();
        $pagination = Pagination::default($users);

        return view('inactive-sellers', [
            'users' => $users,
            'pagination' => $pagination,
        ]);
    }

    public function inactiveUsers()
    {
        $users = User::where('is_active', 0)
        ->paginate()
        ->withQueryString();
        $pagination = Pagination::default($users);

        return view('inactive-users', [
            'users' => $users,
            'pagination' => $pagination,
        ]);
    }

    public function deactivate(Request $request)
    {
        $request->validate([
            'userId' => ['required'],
        ]);

        $userId = $request->input('userId');
        
        User::where('id', $userId)->update(['is_active' => 0]);

        return response()->noContent();
    }

    public function activate(Request $request)
    {
        $request->validate([
            'userId' => ['required'],
        ]);
        
        $userId = $request->input('userId');
        
        User::where('id', $userId)->update(['is_active' => 1]);

        return response()->noContent();
    }
}
