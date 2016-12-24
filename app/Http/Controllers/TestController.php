<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class TestController extends BaseController
{
    public $_arr = array(
        array('id' => '1', 'name' => '节点1', 'pid' => '4'),
        array('id' => '2', 'name' => '节点2', 'pid' => '1'),
        array('id' => '3', 'name' => '节点3', 'pid' => '2'),
        array('id' => '4', 'name' => '节点4', 'pid' => '0'),
//        array('id' => '5', 'name' => '节点5', 'pid' => '4'),
//        array('id' => '6', 'name' => '节点6', 'pid' => '0'),
//        array('id' => '7', 'name' => '节点7', 'pid' => '1'),
    );

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

    public function arr()
    {
        $res = $this->send();
        echo "<pre>";
        print_r($res);
    }

    public function send($pid = 0, &$res = array())
    {
        $data = $this->getList($pid);
        foreach ($data as $value) {
            $res[]=$value;
            $this->send($value['id'], $res);
        }
        return $res;
    }


    /**
     * 获取所需的子列表数据
     * @param int $pid 父级编号
     * @return array();
     */

    public function getList($pid)
    {
        $res=[];
        foreach ($this->_arr as $value) {
            if ($value['pid'] == $pid) {
                $res[] = $value;
            }
        }
        return $res;
    }
}
