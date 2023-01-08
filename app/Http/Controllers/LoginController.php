<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::user()){
            return redirect()->route('home');
        }else{
            return view('login');
        }
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            $akun = $request->only('email', 'password');
            if (Auth::attempt($akun)) {
                if(Auth::user()->role == "ADMIN"){
                    return redirect()->route('adm.dashboard');
                }else{
                    return redirect()->route('home');
                }
            } else {
                return redirect()->route('login')->with(['error' => 'Wrong username or password!']);
            }
        } catch (QueryException $e) {
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect()->route('login')->with(['error' => $e->errorInfo]);
        }
    }

    public function register()
    {
        if(Auth::user()){
            return redirect()->route('home');
        }else{
            return view('register');
        }
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|unique:users',
            'username' => 'required',
            'hp' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create(['name'=> $request->name,'email' => $request->email, 'username' => $request->username,
            'hp' => $request->hp, 'password' => Hash::make($request->password), 'role' => 'USER']);

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
