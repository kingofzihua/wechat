<?php

namespace App\Http\Middleware;

use Closure;

use App\Model\Basic as Basics;

/**
 * 网站基础设置
 * Class Basic
 * @package App\Http\Middleware
 */
class Basic
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

        /**
         * 查询网站基本信息
         */
        return $next($request);
    }
}
