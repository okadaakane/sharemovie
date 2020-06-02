<?php
/*要らないので削除

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'edited_at' => 'required',
    );
      // 以下を追記
    // Movieモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}
