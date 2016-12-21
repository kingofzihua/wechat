<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends BasicController
{
    /**
     * 首页
     */
    public function index(Request $request)
    {
        dump($request);
        return view($this->_style.'.index');
    }
}
