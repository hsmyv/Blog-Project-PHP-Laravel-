<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
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
        return $next($request);
    }
    
   // public function terminate(Request $request, Response $response)
   // {
   //     $date = "Tarix : ".date('Y-m-d H:i:s')." | ";
   //     $exec_time = "icra muddeti : ".(microtime(true) - LARAVEL_START * 100)." ms | ";
   //     $link = "Link : ". $request->fullUrl(). "|";
   //     $ip     = "IP : " . $request->ip(). "|";
   //     $method  = "Metod : ". $request->method();
   //     $log = $date.$exec_time.$link.$ip.$method;

   //     Log::info($log);

    //} 
    
}
