<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
   
    //requiredは必須
    protected $guarded =array('id');
    public static $rules =array(
        'Name' =>'required',
        'Goal' => 'required',
        );
}
