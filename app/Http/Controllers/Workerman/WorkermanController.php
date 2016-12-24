<?php
namespace App\Http\Controllers\Workerman;

use \App\Http\Controllers\BasicController as Controller;
use Workerman\Worker;
use PHPSocketIO\SocketIO;

/**
 * Workerman 测试
 * User: King丶洛
 * Date: 2016/12/10
 * Time: 17:31
 */
class WorkermanController extends Controller
{

    public function index()
    {
        return view();
    }


}