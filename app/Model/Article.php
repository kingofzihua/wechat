<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Authenticatable
{
//    use Notifiable;
    use SoftDeletes;

    public static function options($id)
    {
        return static::where('id', $id)->get()->map(function ($address) {

            return [$address->id => $address->address];

        })->flatten();
    }
}

