<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view('admin.userIndex', compact('data'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('admin.register');
    }
    public function registerStore(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user/login');
    }

    public function loginUser(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return \redirect('user/login');
    }

    public function logout()
    {
        Auth::logout();
        return \redirect('user/login');
    }
}
