<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        $attributes = request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
        ]);

        if(!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email'=> 'Sorry, those credentials do not match.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/account');
    }

    public function show() {
     $insurances = Client::where('user_id', Auth::user()->id)->get();

     return view('auth.index', compact('insurances'));
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
