<?php

namespace App\Admin\Controllers\Wechat;


use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MenuController extends Controller
{

    use ModelForm;

    private $wechat;

    public function __construct()
    {
        $this->wechat = app('wechat');
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('菜单管理');
            $content->description('菜单管理');

            $content->body($this->menu());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function menu()
    {

        $menu = $this->wechat->menu;
//        $menus = $menu->current()->all();
//        dump($menus);
        return view('wechat.menu.index');
    }

    /**
     * 删除菜单
     */
    protected function deleteMenu()
    {
        $menu = $this->wechat->menu;
        $res = $menu->destroy(); // 全部
        return $res;
    }


}
