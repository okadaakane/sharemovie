<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
//modelを使えるようにする
use App\Movie;

class MoviesController extends Controller
{
      public function add ()
    {
        
        return view('admin.movies.shuffle');
        
    }

    public function create (Request $request)
    {
     
        $this->validate($request, Movie::$rules);
        $form = $request->all();
        unset($form['_token']);
        $movie = new Movie;
        $movie->fill($form);
        $movie->user_id = Auth::id();
      
        $movie->save();
        
     
     return redirect('admin/movies/shuffle');
    }


/*index actionと同じ役割*/
 public function shuffle (Request $request)
 {
    $movies = Movie::where('user_id', Auth::id())->orderBy('created_at', 'asc')->get();
    return view('admin.movies.shuffle',['movies' => $movies]);
  }
  
   public function update ()
    {
        return view('admin.movies.shuffle');
    }
    

    public function delete (Request $request)
    {
        // 該当するMovie Modelを取得
        $movie = Movie::find($request->id);
        // 削除する
        $movie->delete();
          return redirect('admin/movies/shuffle');
    }
}
