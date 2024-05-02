<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // It ensures that the user is authenticated before allowing access to the routes within the group.
        // If the user is not authenticated, it redirects them to the login page.
        // Essentially, it ensures that only authenticated users can access the routes.

        return $request->expectsJson() ? null : route('login');
    }
}
