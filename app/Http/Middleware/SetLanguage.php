<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $languages = ['az', 'en'];
        if($request->language && in_array($request->language, $languages)){
            $_COOKIE['language'] = $request->language;
        }
        \App::SetLocale( $_COOKIE['language'] ?? 'az');
        return $next($request);
    }
}
