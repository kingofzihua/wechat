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
        $lang = 'zh_CN';
        $request->session()->flash('_lang', 'zh_CN');
//        App::setLocale('zh_CN'); //重置env里面的语言选项
        return $next($request);
    }

}
