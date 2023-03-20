<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\user;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth/register');
    }

    public function processRegistration(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required | email | unique:users',
            'phoneNumber' => 'required',
            'password' => [
                'required',
                Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                            ->uncompromised(3)
            ],
            'confirmPassword' => 'required | same:password'
        ]);

        User::create([
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'phoneNumber' => request('phoneNumber')
        ]);

        return redirect('/login')->with('message', 'Registration successful!');

    }

    public function login(){
        return view('auth/login');
    }

    public function processLogin(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => [
                'required',
                Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                            ->uncompromised(3)
            ]
        ]);

        $credentials = $request->only('email', 'password');

        //Login user
        if(Auth::attempt($credentials)){
            return redirect('/schedulePickup')->with('message', 'Login successful');
        }
    }

    public static function getUserName($id){
        $user = User::find($id);
        return $user->firstName.' '.$user->lastName;
    }
}
