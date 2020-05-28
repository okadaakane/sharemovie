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


    public function edit()
    {
        return view('admin.movies.edit');
    }
    public function delete ()
    {
        return view('admin.movies.delete');
    }
}
