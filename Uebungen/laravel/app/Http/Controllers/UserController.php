<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) 
    {
        $data = $request->all();

        // PASSWORT Verschlüsseln
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        // INSERT USER
        $user = User::create
        ([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $password
        ]);
        session()->put('userId', $user->id);
        return redirect('products');
    }

    public function login(Request $request) 
    {
        $data = $request->all();

        $user = User::where('username', $data['username'])->first();

        if ($user) 
        {
            if (password_verify($data['password'], $user->password)) 
            {
                session()->put('userId', $user->id);
                // Logged in
                return redirect('products');
            }
            else 
            {
                return redirect('login');
            }
        }
        else 
        {
            return redirect('register');
        }
    }

    public function showLogin() 
    {
        if(session()->has('userId')) return redirect('products');
        return view('login');
    }

    public function showRegister() 
    {
        return view('register');
    }

    public function showLogout() 
    {
        if(session()->has('userId'))
        {
            session()->forget('userId');
        }
        return redirect('login');
    }

    // protected function isUserLoggedIn() 
    // {
    //     if (session()->has('userId')) 
    //     {
    //         return true;
    //     }
    //     return false;
    // }

    // protected function getUser() 
    // {
    //     if ($this->isUserLoggedIn()) 
    //     {
    //         return User::find(session()->get('userId'));
    //     }

    //     return null;
    // }
}