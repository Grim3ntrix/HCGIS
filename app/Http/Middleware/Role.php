<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {


        $Role = $request->user()->role;

        if ($Role !== $role) {
            if ($Role === 'manager') {
                return redirect('/admin/manager/dashboard');
            }elseif ($Role === 'staff') {
                return redirect('/admin/staff/dashboard');
            }elseif ($Role === 'customer') {
                return redirect('/dashboard');
            }
    
        }

        return $next($request);
    } 
}
