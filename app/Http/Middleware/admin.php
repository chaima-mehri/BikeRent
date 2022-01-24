<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\http\Request ;
use Closure;

class admin
{
   
    public function handle(Request $request, Closure $next)
    {
        if($request->Session()->get('user')){
            $role = $request->Session()->get('user')->role_id;
            if( $role == 1){
                return $next($request); 
            }
        }
        
       
        
        
        return redirect("/");
    }
}
