<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Laravel retrieves the currently authenticated user using the default guard configured in your config/auth.php
        // By default, Laravel's authentication system is set up to use the users table in your database and the User model provided by Laravel's default authentication scaffolding.
        //To change default customise guards in config.php(Example)

        // 'guards' => [
        //     'employee' => [
        //         'driver' => 'session',
        //         'provider' => 'employees',
        //     ],
        // ],

        // 'providers' => [
        //     'employees' => [
        //         'driver' => 'eloquent',
        //         'model' => App\Models\Employee::class,
        //     ],
        // ],

        // if (Auth::guard('employee')->check()) {
        //     // User is authenticated using the employee guard
        // }


        if(Auth::user()->utype!='ADM')
        {
            session()->flush();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
