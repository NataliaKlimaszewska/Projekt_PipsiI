<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Supported languages
        $supportedLocales = ['en', 'pl', 'es', 'ru', 'fr'];

        // Check if locale is in the session
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        }
        // Check if locale is in the user's preferences (if you have user authentication)
        else if (auth()->check() && in_array(auth()->user()->locale, $supportedLocales)) {
            $locale = auth()->user()->locale;
        }
        // Check browser's preferred language
        else {
            $locale = $request->getPreferredLanguage($supportedLocales) ?: 'en';
        }

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
