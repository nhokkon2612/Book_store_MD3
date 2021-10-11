<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class CheckLoginCustomer
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
        if (!session('customer-info')){
            alert()->question('Không tìm thấy thông tin người dùng ?','Vui lòng đăng nhập');
            return redirect()->route('shop.formLogin');
        }
        return $next($request);
    }
}
