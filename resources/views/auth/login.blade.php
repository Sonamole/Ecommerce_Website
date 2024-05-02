@extends('layouts.base')

@section('content')


<style>
    input [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:hover,
    [type="email"]:hover,
    [type="url"]:hover,
    [type="password"]:hover,
    [type="number"]:hover,
    [type="date"]:hover,
    [type="datetime-local"]:hover,
    [type="month"]:hover,
    [type="search"]:hover,
    [type="tel"]:hover,
    [type="time"]:hover,
    [type="week"]:hover,
    [multiple]:hover,
    textarea:hover,
    select:hover {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }

    input [type="text"]:active,
    [type="email"]:active,
    [type="url"]:active,
    [type="password"]:active,
    [type="number"]:active,
    [type="date"]:active,
    [type="datetime-local"]:active,
    [type="month"]:active,
    [type="search"]:active,
    [type="tel"]:active,
    [type="time"]:active,
    [type="week"]:active,
    [multiple]:active,
    textarea:active,
    select:active {
        --tw-ring-color: transparent !important;
        border-color: transparent !important;
    }
</style>
<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="login-title">
                    <h2>Login</h2>
                </div>
                <div class="input">
                    <label for="name">Username</label>
                    <input type="email" id="name" name="email":value="old('email')" required="" autofocus=""
                        autocomplete="name">

                        {{-- :value="old('name')": Laravel's Blade syntax is used here. This attribute is used to populate the input field with a value from a previous form submission. old('name') retrieves the value of the "name" field from the previous form submission. This is often used to repopulate form fields with previously entered values when the form is redisplayed due to validation errors. --}}
                        @error('email')  <span class="text-danger mt-3">{{ $message }}  </span> @enderror
                        {{-- You don't define $message explicitly; Laravel does it for you behind the scenes based on the validation rules you've set up for your form. --}}


                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
                        autocomplete="current-password">
                        @error('password') <span class="text-danger mt-3">{{ $message }}</span>  @enderror


                </div>

                <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                <div class="button login">
                    <button type="submit">
                        <span>Log In</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>

                <p>Not a member? <a href="{{ route('register') }}" class="theme-color">Sign up now</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
