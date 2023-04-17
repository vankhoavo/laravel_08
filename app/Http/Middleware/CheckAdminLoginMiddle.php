<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminLoginMiddle
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')->check()) {
            return $next($request);
        } else {
            toastr()->error('Bạn cần phải login trước!');
            return redirect('/admin-lte/login');
        }
    }
}
