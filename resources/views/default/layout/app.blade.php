<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>King</title>

    @section('style'){{--CSS--}}
    <link rel="stylesheet" href="{{asset('/layui/css/layui.css')}}">
    @show
    <style>
        .layui-nav .layui-nav-item {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            line-height: 65px;
        }
        .site-demo-button .layui-btn{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <ul class="layui-nav">
            <li class="layui-nav-item">
                <a href="">最新活动</a></li>
            <li class="layui-nav-item layui-this">
                <a href="">产品</a>
                <dl class="layui-nav-child">
                    <dd><a href="">选项1</a></dd>
                    <dd><a href="">选项2</a></dd>
                    <dd><a href="">选项3</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">大数据</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">解决方案</a>
                <dl class="layui-nav-child">
                    <dd><a href="">移动模块</a></dd>
                    <dd><a href="">后台模版</a></dd>
                    <dd class="layui-this"><a href="">选中项</a></dd>
                    <dd><a href="">电商平台</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">社区</a></li>
        </ul>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="demo">
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:;">默认展开</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">选项一</a></dd>
                        <dd><a href="javascript:;">选项二</a></dd>
                        <dd><a href="javascript:;">选项三</a></dd>
                        <dd><a href="">跳转项</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">解决方案</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">移动模块</a></dd>
                        <dd><a href="">后台模版</a></dd>
                        <dd><a href="">电商平台</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">云市场</a></li>
                <li class="layui-nav-item"><a href="">社区</a></li>
            </ul>

        </div>
    </div>
    <div class="layui-body">
        <div class="layui-main">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
                <legend>面板外的操作</legend>
            </fieldset>
            <div class="site-demo-button">
                <button class="layui-btn site-demo-layim" data-type="chat">创造一个临时会话</button>
                <button class="layui-btn site-demo-layim" data-type="message">制造一个好友发过来的消息</button>
                <button class="layui-btn site-demo-layim" data-type="messageTemp">制造一个临时会话消息</button>

                <br>

                <button class="layui-btn site-demo-layim" data-type="add">申请好友</button>
                <button class="layui-btn site-demo-layim" data-type="addqun">申请加群</button>
                <button class="layui-btn site-demo-layim" data-type="addFriend">同意好友</button>
                <button class="layui-btn site-demo-layim" data-type="addGroup">增加群组到主面板</button>
                <button class="layui-btn site-demo-layim" data-type="removeFriend">删除主面板好友</button>
                <button class="layui-btn site-demo-layim" data-type="removeGroup">删除主面板群组</button>

                <br>
                <button class="layui-btn site-demo-layim" data-type="setGray">置灰离线好友</button>
                <button class="layui-btn site-demo-layim" data-type="unGray">取消好友置灰</button>
                <a href="http://layim.layui.com/kefu.html" class="layui-btn site-demo-layim" target="_blank">客服模式</a>
            </div>
        </div>
    </div>
</div>

<script src="{{asset("/layui/layui.js")}}"></script>
<script src="{{asset('/layui/build/layui.js')}}" charset="utf-8"></script>
<script>
    layui.use(['layer', 'form'], function () {
        var layer = layui.layer
                , form = layui.form();
//        layer.msg('Hello World');
    });
</script>
@section('script'){{--js--}}
</body>
</html>
