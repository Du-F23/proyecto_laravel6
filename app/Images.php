<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Images;

class Images extends Model
{
    Use SoftDeletes;
    //
    protected $fillable = [
        'name'
    ];

    public function article()
    {
        return $this->belongsTo('Article::class','foreing_key','img_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Article');
    }
}
