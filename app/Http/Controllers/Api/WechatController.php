<?php

namespace App\Http\Controllers\Api;

use EasyWeChat\Support\Log;

/**
 *  微信Api
 */
class WechatController extends ApiController
{
    private $wechat;    //微信接口实例
    private $message;   //上行消息

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
            Log::info($message);
            $this->message = $message;
            switch ($message->MsgType) {
                case 'event':
                    # 事件消息...
                    break;
                case 'text':
                    # 文字消息...
                    break;
                case 'image':
                    # 图片消息...
                    break;
                case 'voice':
                    # 语音消息...
                    break;
                case 'video':
                    # 视频消息...
                    break;
                case 'location':
                    # 坐标消息...
                    break;
                case 'link':
                    # 链接消息...
                    break;
                // ... 其它消息
                default:
                    # code...
                    break;
            }
            return "您好！欢迎关注我!";
        });
        return $server->serve();
    }

}