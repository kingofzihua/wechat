<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends BasicController
{
    /**
     * 首页
     */
    public function index()
    {
        return view($this->_style.'.index');
    }
}
