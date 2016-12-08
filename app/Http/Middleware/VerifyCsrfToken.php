<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification. 不需要csrf的路由 一般作为接口
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
