<?php

namespace App\Http\Middleware;

use Closure;

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
        $lang = 'zh_cn';
        $request->session()->flash('_lang', 'zh_cn');
        return $next($request);
    }

}
