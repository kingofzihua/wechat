<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class,'id','tag');
    }
}
