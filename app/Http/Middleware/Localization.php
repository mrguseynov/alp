<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    protected $languages = ['en', 'ru', 'ge', 'tr', 'az'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = 'en';
        if (!empty($request->segment(1)) && in_array($request->segment(1), $this->languages)) {
            $locale = $request->segment(1);
            App::setLocale($locale);
        }
        else{
            abort(404);
        }
        return $next($request);
    }
}
