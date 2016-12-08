<?php

namespace App\Http\Controllers\Api;

/**
 *  微信Api
 */
class WechatController extends \App\Http\Controllers\Controller
{
    private $wechat;//微信接口实例

    public function __construct()
    {
        //创建微信实例,并且用自己的缓存token方式
        $this->wechat = app('wechat');
    }

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        $server = $this->wechat->server;
        $server->setMessageHandler(function ($message) {
            return "您好！欢迎关注我!";
        });
        return $server->serve();
    }

}