<?php

namespace App\Admin\Controllers\Wechat;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MenuController extends Controller
{
    use ModelForm;

    public function index()
    {
        echo '1';
    }
}
