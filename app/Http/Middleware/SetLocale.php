<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
     public function handle(Request $request, Closure $next)
    {
        $locale = session('locale', config('app.locale')); // default dari config/app.php
        app()->setLocale($locale);

        return $next($request);
    }
}
