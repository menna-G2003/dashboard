<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

 
class Test
{
    public function handle(Request $request, Closure $next): Response
    {
        // Perform action
     
       return $next($request);
    }
}
