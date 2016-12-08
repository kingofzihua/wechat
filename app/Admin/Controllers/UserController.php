<?php

namespace App\Admin\Controllers;

use App\User;

use Encore\Admin\Auth\Permission;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserController extends Controller
{
    public function __construct()
    {
        // 检查权限，有user权限的角色可以访问
//        Permission::check('user');
    }

    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('用户管理');
            $content->description('user');
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('用户管理');
            $content->description('user');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header('用户管理');
            $content->description('user');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(User::class, function (Grid $grid) {
            //查询过滤器
            $grid->filter(function ($filter) {
                $filter->like('name', 'name');
            });
            //列表显示
            $grid->id('ID')->sortable();//sortable 支持排序
//            $grid->column('name','用户名');//防止name 与 Grid对象中的name 冲突
            $grid->name('用户名')->sortable();//获取name字段
            $grid->email('邮箱');//获取name字段
            $grid->password('密码');//获取password字段 不行
//            $grid->created_at();
            $grid->updated_at("修改时间")->sortable();
            //操作按钮
            $grid->disableCreation();//禁用添加按钮
            $grid->disableBatchDeletion();//禁用批量删除
            $grid->view("laravel-admin.grid.table");
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {
            $form->text('name', '用户名')->rules('required|max:20');
            $form->password('password', '密码')->rules('required|min:6');
            $form->email('email', '邮箱');
        });
    }
}
