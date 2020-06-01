<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//modelを使えるようにする
use App\Movie;

class MoviesController extends Controller
{
      public function add()
    {
        return view('admin.movies.create');
        
    }

    public function create (Request $request)
    {
     $this->validate($request,Movie::$rules);
     $movies = new Movie;
     $form = $request->all();
     unset($form['_token']);
     $movies->fill($form);
     $movies->save();
     
     return redirect('admin/movies/create');
    }

 public function shuffle(Request $request)
  {
      $cond_goal = $request->cond_goal;
      if ($cond_goal != '') {
          // 検索されたら検索結果を取得する
        //村田先生の助言 $posts = Auth::user()->goals;
        //Authモデル、Userモデルどちらもok?naze
        $posts = Auth::user()->setgoals;
      } else {
          //モデル単数形
        $posts = Movie::all();
      }
      //cond 条件付きの
      return view('admin.movies.shuffle', ['posts' => $posts, 'setgoal' => $cond_goal]
     );
  }
  
    public function edit()
    {
        $movies = Movie::find($request->setgoal);
        if (empty($movies)) {
        abort(404);    
    }
      return view('admin.news.edit', ['setgoal' => $setgoal]);
    }
    
    
    
    public function delete ()
    {
        return view('admin.movies.delete');
    }
}
