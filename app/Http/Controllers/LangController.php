<?php
/**
 * Created by PhpStorm.
 * User: dev001
 * Date: 17-1-5
 * Time: 15:06
 */

namespace App\Http\Controllers;


use App\Model\Lang;
use Illuminate\Support\Facades\Cache;

class LangController extends Controller
{

    /**
     * 查询数据库并缓存语言
     */
    public static function setLang()
    {
        $lang['en'] = Lang::get()->pluck('en', 'name')->toArray();
        $lang['zh_CN'] = Lang::get()->pluck('zh_CN', 'name')->toArray();
        Cache::forever('lang', $lang);

    }

    /**
     * 获取语言包
     */
    public static function getLang()
    {
        $lang = Cache::get('lang');
        dump($lang);
        //获取语言
    }


    /**
     * 修改语言
     */
    public static function editLang()
    {
        //获取语言
        echo "editLang";
    }

    /**
     * 删除语言
     */
    public static function delLang()
    {
        Cache::forget('lang');
        //获取语言
    }

    public function lang($key, $type = 'en')
    {
        $lang = Cache::get('lang');
        return !empty($lang[$type][$key])?$lang[$type][$key]:'';
    }

}