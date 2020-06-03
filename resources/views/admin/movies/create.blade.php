@extends('layouts.admin')
@section('title', 'ステップアップ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>Life is beautiful!</h1>
                <form action="{{ action('Admin\MoviesController@add') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-6">目標を入力してみましょう！</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="setgoal" value="{{ old('setgoal') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="Add">
                </form>
            </div>
        </div>
    </div>
@endsection