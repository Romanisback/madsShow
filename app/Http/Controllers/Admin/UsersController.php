<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function list(Request $request)
    {
        $users = User::query()->orderBy('id', 'DESC')->paginate(50);

        return view('admin.users.list', compact('users'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            $user = new User();
            $user->role_id = Role::ROLE_ADMIN;
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));
            $user->save();

            return redirect()->route('admin.users.list')->with(['success' => 'Пользователь добавлен!']);
        }

        return view('admin.users.create');
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            $params = $request->all();

            if ($request->get('password')) {
                $params['password'] = Hash::make($request->get('password'));
            }

            $user->fill($params);
            $user->save();

            return redirect()->route('admin.users.list')->with(['success' => 'Пользователь обновлен!']);
        }

        return view('admin.users.edit', compact('user'));
    }

    public function delete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($user->delete()) {
            return redirect()->route('admin.users.list')->with(['success' => 'Пользователь удален!']);
        }

        return redirect()->route('admin.users.list')->with(['error' => 'Не удалось пользователя']);
    }
}
