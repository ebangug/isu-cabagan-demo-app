<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // validate form input
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7'],
        ]);

        // attempt login
        if (auth()->attempt($attributes)) {
            // regenerate user session
            session()->regenerate();
            // redirect with success message
            return redirect('/')->with('success', 'Welcome, ' . auth()->user()->name . '!');
        }

        // auth fails
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
