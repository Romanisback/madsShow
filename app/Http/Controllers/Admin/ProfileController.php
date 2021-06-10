<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
            ]);

            $user->name = $request->name;

            if ($request->get('password')) {
                $user->password = Hash::make($request->get('password'));
            }
            $user->save();

            return redirect()->back()->with(['success' => 'Успешно обновлено!']);
        }

        return view('admin.profile.edit', compact('user'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
