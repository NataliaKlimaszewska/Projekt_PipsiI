<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        $supportedLocales = ['en', 'pl', 'es', 'ru', 'fr', 'de'];


        if (Session::has('locale')) {
            $locale = Session::get('locale');
        }

        else if (auth()->check() && in_array(auth()->user()->locale, $supportedLocales)) {
            $locale = auth()->user()->locale;
        }

        else {
            $locale = $request->getPreferredLanguage($supportedLocales) ?: 'en';
        }


        App::setLocale($locale);

        return $next($request);
    }
}
