<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class TestController extends BaseController
{
    /**
     * 显示页面
     * view
     */
    public function index(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $path = Storage::putFile('wechat/test', $request->file('file'));
            dd($path);
        } else {
            return view("show/form");
        }
    }

}
