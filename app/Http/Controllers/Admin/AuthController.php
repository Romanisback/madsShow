<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'email'    => 'required',
                'password' => 'required'
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => Role::ROLE_ADMIN])){
                if (Auth::user()) {
                    return redirect()->route('admin.dashboard');
                }
            }

            return redirect()->back()->with(['danger' => 'Не верные данные!']);
        }

        return view('admin.auth.login');
    }
}
