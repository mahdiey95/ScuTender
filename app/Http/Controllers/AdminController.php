<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }




    public function storeAdmin(Request $request)
    {
        if(Auth::user()->role != 'SYSADMIN')
            return abort(403);


        $data = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed'
        ]);

        $user = new User([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
            'title' => $data['title']
        ]);

        if($user->save())
            return back()->with('success','کاربر ثبت شد');
        else
            return abort(500);

    }

    public function createAdmin() {
        if(Auth::user()->role != 'SYSADMIN')
            return abort(403);

        return view('auth.register_admin');
    }
}
