<?php

namespace App\Admin\Controllers\Wechat;


use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MenuController extends Controller
{
    use ModelForm;

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
        return view('wechat.menu.index');
    }

}
