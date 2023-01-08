<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminController extends Controller
{


    public function login()
    {

        return view('backend.login');
    }

    public function login_user(Request $req)
    {


        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Redirect to the login page.
        if (Auth::attempt($req->only('email', 'password'))) {
            return redirect('admin');
        } else {
            return redirect('/login')->withError('Username or Password Incorrect');
        }
    }

    public function register(Request $req)
    {

        if ($req->submit == 'submit') {
            $register = User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
            ]);

            // Redirect the user to the login form.
            if ($register) {
                Auth::attempt($req->only('email', 'password'));
                return redirect('admin');
            }
        }

        return view('backend.register');
    }

    public function admin()
    {
        return view('backend.admin');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function leads()
    {
        return view('backend.lead');
    }
}
