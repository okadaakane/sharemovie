<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    //guaredで予期しない代入させない
    //requiredは必須
    protected $guarded =array('id');
    public static $rules =array(
        'Name' =>'required',
        'Goal' => 'required',
        );
}
