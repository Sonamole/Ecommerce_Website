<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers; //Location->vendor/laravel/framework/src/Illuminate/Foundation/Auth

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

// The AuthenticatesUsers trait contains the showLoginForm() method among others, and when you use the use AuthenticatesUsers; statement in your LoginController, it effectively brings all the methods defined in that trait into the LoginController class.
// So, even though you don't see the showLoginForm() method directly within the LoginController class, it's still available and functional because it's being inherited from the AuthenticatesUsers trait.


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
