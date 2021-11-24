<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    Use SoftDeletes;

/*     declaramos nuestros campos de nuestra tabla tags*/
    protected $fillable = [
        'nombre',
    ];
}
