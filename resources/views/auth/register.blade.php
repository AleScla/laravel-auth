@extends('layouts.guest')

@section('main-content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="d-flex w-100 justify-content-between">
            <label for="name">
                Name
            </label>
            <input type="text" id="name" name="name">
        </div>

        <!-- Email Address -->
        <div class="mt-4 d-flex w-100 justify-content-between">
            <label for="email">
                Email
            </label>
            <input type="email" id="email" name="email">
        </div>

        <!-- Password -->
        <div class="mt-4 d-flex w-100 justify-content-between">
            <label for="password">
                Password
            </label>
            <input type="password" id="password" name="password">
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 d-flex w-100 justify-content-between">
            <label for="password_confirmation">
                Conferma Password
            </label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="mt-4 d-flex w-100 justify-content-between">
            <a href="{{ route('login') }}" >
                {{ __('Already registered?') }}
            </a>

            <button type="submit">
                Register
            </button>
        </div>
    </form>
@endsection
