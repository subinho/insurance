<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{

    public function create()
    {
        $currentUser = Auth::user();
        return view('client.create', compact('currentUser'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'min:3', 'max:50'],
            'last_name' => ['required', 'min:3', 'max:50'],
            'address' => ['required', 'min:3', 'max:91'],
            'city' => ['required', 'min:3', 'max:33'],
            'zip' => ['required', 'min:5', 'max:5'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'numeric'],
            'identification_number'=> ['required','numeric'],
            'has_spouse' => ['required', 'boolean'],
            'policy_type' => ['required', Rule::in(['Life', 'Health'])],
        ]);

         $user = Auth::user();

        if ($user->clients()->count() >= 2) {
        return redirect()->back()->withErrors(["You can't have more then 2 insurances"]);
    }
        if ($user->clients()->where('policy_type', $validated['policy_type'])->exists()) {
            return redirect()->back()->withErrors(["You already have this insurance"]);
        }

        Client::create(array_merge($validated, ['user_id' => $user->id]));

         return redirect()->route('/account');
    }
}