<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\WelcomeEmail;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // Validate the input
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      // Create the user
      $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
      ]);

      // Log them in
      auth()->login($user);

      // Send welcome email
      //   \Mail::to($user)->send(new Welcome($user));
      \Mail::to($user)->send(new WelcomeEmail($user));

        session()->flash('message', 'Thanks for signing up!');

      // Redirect to home page
      return redirect()->home();
    }
}
