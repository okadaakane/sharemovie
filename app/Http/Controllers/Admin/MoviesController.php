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
     $movie = new Movie;
     $form = $request->all();
     unset($form['_token']);
     $movie->fill($form);
     $movie->save();
     
     return redirect('admin/movies/shuffle');
    }


/*index actionと同じ役割*/
 public function shuffle (Request $request)
  {
      $cond_goal = $request->cond_goal;
      if ($cond_goal != '') {
        //村田先生の助言 $posts = Auth::user()->goals;
        $posts = Movie::fillable()->setgoals;
        } else {
          //モデル単数形
        $posts = Movie::all();
      }
      //cond 条件付きの
      return view('admin.movies.shuffle', ['posts' => $posts, 'setgoal' => $cond_goal]
        );
    }
  
   public function update ()
    {
        return view('admin.movies.shuffle');
    }
    
//    public function edit()
//    {
//        $movies = Movie::find($request->setgoal);
//        if (empty($movies)) {
//        abort(404);    
//    }
//      return view('admin.news.edit', ['setgoal' => $setgoal]);
//    }
    
    
    
    public function delete (Request $request)
    {
        // 該当するMovie Modelを取得
        $movie = Movie::find($request->id);
        // 削除する
        $movie->delete();
          return redirect('admin/movies/shuffle');
    }
}
