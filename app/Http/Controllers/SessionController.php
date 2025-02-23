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

    public function edit($id) {
        $insurance = Client::find($id);

        return view('auth.edit', compact(['insurance']));
    }

    public function update(Request $request) {
        $attributes = $request->validate([
            'first_name' => ['required', 'min:3', 'max:50'],
            'last_name' => ['required', 'min:3', 'max:50'],
            'address' => ['required', 'min:3', 'max:91'],
            'city' => ['required', 'min:3', 'max:33'],
            'zip' => ['required', 'min:5', 'max:5'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'numeric'],
            'identification_number'=> ['required','numeric'],
            'has_spouse' => ['required', 'boolean'],
        ]);

        $insurances = Client::where('user_id', Auth::user()->id)->get();
        foreach( $insurances as $insurance ) {
            $insurance->update($attributes);
        }

        return redirect('/account');
    }

    public function destroy($id) {
        $insurances = Client::findOrFail($id);
        $insurances->delete();

        return redirect('/account');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
