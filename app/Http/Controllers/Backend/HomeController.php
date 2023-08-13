<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Pay;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(3);
        return view('backend.home.index', compact('users'));
    }
    public function role($id)
    {
        $user_role = User::findOrFail(intval($id));
        $role = $user_role->role;
        $user = User::where('role', $role)->first();
        if ($user->role == 0)
        {
            $user->role = 1;
            $user->save();
        }else
        {
            $user->role = 0;
            $user->save();
        }
        return response()->json($user);
    }
    public function edit($id)
    {
        $user = User::findOrFail(intval($id));

        return response()->json($user);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'nullable|unique:admins|max:255',
        ]);

        $user = User::findOrFail(intval($id));
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->update();

        return response()->json($user);
    }
    public function destory($id)
    {
        $user = User::findOrFail(intval($id));
        $user->delete();

        return response()->json([
            'status' => 200,
            'success' => 'User Information Has Been Deleted Successfully!'
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail(intval($id));
        $pay = Pay::findOrFail(intval($id));
        return view('backend.home.show', compact('user', 'pay'));
    }

    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $search = $request->search;
            $search = str_replace(" ", "%", $search);
            $users = User::where('email', 'like', '%'.$search.'%')
                            ->orWhere('first_name', 'like', '%'.$search.'%')
                            ->orWhere('last_name', 'like', '%'.$search.'%')
                            ->orderBy('created_at', 'DESC')
                            ->paginate(3);
            return view('backend.partials.user_table', compact('users'))->render();
        }
    }

    public function pagination()
    {
            $users = User::orderBy('created_at', 'DESC')->paginate(3);
            return view('backend.partials.user_table', compact('users'))->render();
    }
}
