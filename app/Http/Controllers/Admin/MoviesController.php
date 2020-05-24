<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
      public function add()
    {
        return view('admin.movies.create');
        
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
