<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{
 
    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->userType == 'Admin' )
        {
            return $next($request);
        }

        return redirect('home');

    }

}

?>