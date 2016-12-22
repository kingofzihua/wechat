<?php

namespace App\Admin\Controllers;

use App\Model\Article;

use App\Model\Tag;
use App\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Support\Facades\DB;

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
                    return "<image  src='" . config("admin.upload.host") . $value . "' height='40px' />";
                } else {
                    return '';
                }
            });
            $grid->auth("作者")->value(function ($userId) {
                if (!empty($userId)) {
                    $user = User::where("id", $userId)->first();
                    if (!empty($user->name)) {
                        return $user->name;
                    } else {
                        return '';
                    }
//
                } else {
                    return '';
                }
            });
            $grid->tag('标签');
            $grid->updated_at("修改时间")->sortable();
            $grid->disableBatchDeletion();  //禁用批量删除
            $grid->disableExport();     //禁用导出数据按钮
            $grid->view("laravel-admin.grid.table");
            $grid->filter(function ($filter) {
                $filter->like('title', '标题');
                $filter->like('auth', '作者');
            });
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
            $form->multipleSelect('tag')->options(Tag::all()->pluck('name', 'id'));
            $form->image('image', "图片");
            $form->editor('content', "内容")->rules('required|max:500');
            $form->hidden('auth')->value('1');
        });
    }
}
