<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {
        request()->validate([
        'first_name' => ['required'],
        'last_name'=> ['required'],
        'email' => ['required', 'email', Rule::unique('users')],
        'password' => ['required'],
    ]);

    $user = User::create([
        'first_name' => request('first_name'),
        'last_name' => request('last_name'),
        'email' => request('email'),
        'password'=> request('password', 'confirmed'),
    ]);

    Auth::login($user);

    return redirect('/account');
    }
}
