<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //requiredは必須
    protected $guarded =array('id');
    public static $rules =array(
        'name' =>'required',
        'setgoal' => 'nullable',
        );
}
