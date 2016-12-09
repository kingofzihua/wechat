<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

/**
 * 前台基础控制器
 * Class Controller
 * @package App\Http\Controllers
 */
class BasicController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;//授权 队列 表单验证

    protected $_style;//样式1

    public function __construct(Request $request)
    {
        /**
         * 样式
         */
        $this->_style = 'default';

    }
}
