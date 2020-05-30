<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//modelを使えるようにする
use App\Movies;

class MoviesController extends Controller
{
      public function add()
    {
        return view('admin.movies.create');
        
    }

    public function create (Request $request)
    {
     $this->validate($request,Movies::$rules);
     $movies = new Movies;
     $foem = $request->all();
     unset($form['_token']);
     $news->fill($form);
     $news->save();
     
     return redirect('admin/movies/create');
    }

 public function shuffle(Request $request)
  {
      $cond_goal = $request->cond_goal;
      if ($cond_goal != '') {
          // 検索されたら検索結果を取得する
          $posts = Movies::where('goal', $cond_goal)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Movies::all();
      }
      //cond 条件付きの
      return view('admin.movies.shuffle', ['posts' => $posts, 'goal' => $cond_goal]);
  }
  
    public function edit()
    {
        return view('admin.movies.shuffle');
    }
    public function delete ()
    {
        return view('admin.movies.delete');
    }
}
