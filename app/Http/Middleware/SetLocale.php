<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request);
        $locale = request()->segment(1);
        if (!array_key_exists($locale, config('app.languages'))) {
            $segments = $request->segments();
            $segments[0] = config('app.fallback_locale');
            return Redirect::to('/'.$segments[0]);
        }
        // Else, Set Current Locale
        app()->setLocale($locale);
        return $next($request);
    }
}
