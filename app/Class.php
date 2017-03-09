<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classname extends Model
{

    protected $fillable = [
        'classid','title','description','category','createdby',
    ];

}
