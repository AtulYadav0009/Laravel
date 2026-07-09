<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "<pre>";
        // print_r($request->age);
        // echo "</pre>";

        // if($request->age < 18 ){
        //     die("BHak Bhsodk");
        // }
        // echo "Age";

          if($request->age<18){
            die("18 se kam hai ");
        }

        return $next($request);
    }
}
