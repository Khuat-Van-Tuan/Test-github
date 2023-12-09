<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Component\HttpFoundation\Response;

class checkloginadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo 'middleware request ';
        if(!$this->islogin()){
            return redirect(route('home'));
        }
        if($request->is('admin/*') || $request->is('admin')){
            echo '<h3>khu vực quản trị</h3>';
        }

        return $next($request);
    }
    public function islogin(){
        return true;
    }
}
