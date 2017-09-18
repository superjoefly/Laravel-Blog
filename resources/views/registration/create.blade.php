@extends('layouts.master')
@section('content')
  <div class="w3-container w3-teal">
    <h2>Register</h2>
  </div>

  <form method="POST" action="/register">
    {{ csrf_field() }}
    <br />
    <label class="w3-text-teal"><b>Name</b></label>
    <input class="w3-input w3-border w3-light-grey" type="text" id="name" name="name" required>

    <label class="w3-text-teal"><b>Email</b></label>
    <input class="w3-input w3-border w3-light-grey" type="text" id="email" name="email" required>

    <label class="w3-text-teal"><b>Password</b></label>
    <input class="w3-input w3-border w3-light-grey" type="password" id="password" name="password" required>

    <label class="w3-text-teal"><b>Confirm Password</b></label>
    <input class="w3-input w3-border w3-light-grey" type="password" id="password_confirmation" name="password_confirmation" required>

    <button type="submit" class="w3-btn w3-blue-grey">Register</button>

    @include('layouts.errors')
  </form>
@endsection
