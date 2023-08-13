<?php

namespace App\Http\Controllers\Auth\Admin;

use Hash;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function adminRegister()
    {
        return view('auth.admin.register');
    }

    public function adminRegisterStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:admins|max:255',
            'password' => 'required|max:15|min:6',
            'confirm_password' => 'required|max:15|min:6',
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.home')->with('success', 'Register Your Account Successfully!');
    }
}
