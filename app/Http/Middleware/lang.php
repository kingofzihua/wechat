<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

/**
 * 实现前台多语言
 * Class lang
 * @package App\Http\Middleware
 */
class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Cookie::has('_lang')) { //判断cookie中是否有语言设置 如果有,则重置
            App::setLocale(Cookie::get('_lang')); //重置env里面的语言选项
        }

        if (!empty($request->lang)) {//判断是否重新设置语言
            Cookie::queue('_lang', $request->lang);
            App::setLocale($request->lang); //重置env里面的语言选项
        }
        return $next($request);
    }

}
