<?php

namespace App\Http\Middleware;

use Closure;

class Instructor
        public function handle($request, Closure $next){
            if(Auth::user()->isInstructor()){
                return $next($request);
            }else{
                Auth::logout();
                return redirect()->route('login');            
            }
        }
}
