<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list(Request $request)
    {
        $users = User::query()->paginate(50);

        return view('admin.users.list', compact('users'));
    }

    public function edit(Request $request)
    {
        $users = User::query()->paginate(50);

        return view('admin.users.list', compact('users'));
    }
}
