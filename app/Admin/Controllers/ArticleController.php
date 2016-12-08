<?php

namespace App\Admin\Controllers;

use App\Model\Article;

use App\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Auth\Permission;

class ArticleController extends Controller
{
    use ModelForm;

//    public function __construct()
//    {
//        // 检查权限，有user权限的角色可以访问
//        $this->middleware(function ($request, $next) {
//            Permission::check('user');
//            return $next($request);
//        });
//    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {

        return Admin::content(function (Content $content) {

            $content->header('文章管理');
            $content->description('article');

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

            $content->header('文章管理');
            $content->description('article');

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

            $content->header('文章管理');
            $content->description('article');
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
        return Admin::grid(Article::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->column('title', "标题");
            $grid->image("图片")->value(function ($value) {
                if (!empty($value)) {
                    return "<image  src='" .config("admin.upload.host"). $value . "' height='40px' />";
                } else {
                    return '';
                }
            });
//            $grid->auth("作者")->value(function ($userId) {
//                if (!empty($userId)) {
//                    return User::where("id", $userId)->first()->name;
//                } else {
//                    return '';
//                }
//            });
            $grid->updated_at("修改时间");
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
        return Admin::form(Article::class, function (Form $form) {
            $form->text('title', "标题")->rules('required|max:30');
            $form->text('desc', "简介")->rules('required|max:50');
            $form->image('image',"图片");
            $form->editor('content', "内容")->rules('required|max:500');
            $form->hidden('auth')->value('1');
        });
    }
}
