<?php

namespace App\Http\Controllers;

//use App\AliyuncsOSS;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class TestController extends BaseController
{
//    public function AliyuncsOSS()
//    {
//        $oss = new AliyuncsOSS\OSSforphp();
//        $res = $oss->uploadFile("test/test.jpg", public_path("/upload/image/test.jpg"));
//        dd($res);
//    }
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
