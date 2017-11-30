<?php
namespace App\Http\Middleware;
use Closure;
class Activity{
   public function handle($request,$next){
        if (time()<strtotime('2017-12-8')){
            return redirect('activity0');
        }
        return $next($request);
   }
}