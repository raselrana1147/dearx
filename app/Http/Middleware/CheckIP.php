<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIP
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
        //113.21.229.130

        $location = geoip()->getLocation($request->ip);
        $iso_code=$location['iso_code'];
        if ($iso_code =="US" || $iso_code=="CA") {
           return $next($request);
        }else{
            return response()->json([
                  'message'=>'Invalid Location',
                  'status' => 401,
                  "type"=>"error",
              ],200);
        }
        
    }
}
