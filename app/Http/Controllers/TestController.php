<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
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

    /**
     * 邮件测试
     */
    public function email()
    {
//        Cookie::forget('_langs');
//Cookie::queue('_lang', null , -1); // 销毁
        dump(Cookie::get('_lang'));
//        $data = ['email'=>"1261456134@qq.com", 'name'=>'name'];
//        Mail::send('welcome', $data, function($message) use($data)
//        {
//            $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
//        });
    }

}
