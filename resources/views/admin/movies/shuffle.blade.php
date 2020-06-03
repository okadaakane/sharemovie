@extends('layouts.admin')
@section('title', '登録された目標')

@section('content')
    <div class="container">
        <div class="row">
            <h2>What is your goal from now on?</h2>
        </div>
        <form action="{{ action('Admin\MoviesController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="setgoal" value="{{ old('setgoal') }}">
                </div>
            </div>
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="Add">
        </form>
       
        <div class="row">
            <div class="list-news col-md-6 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <table>
                            <!-- table header -->
                               @foreach($posts as $movie)
                                <tr>
                                    <th>{{ 1. }}</th>
                                    <td>{{ ($movie->setgoal) }}</td>
                                    <td>
                                        <a href="{{ action('Admin\MoviesController@delete', ['id' => $movie->id]) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>                        
                </div>
        </div>
    </div>
 
<!-- ランダムでメッセージを出す -->
<p class="shufflemessage">
<?php

$fortune = array(
   "いい感じ！", 
   "この調子で！", 
   "頑張りすぎなくていいんだよ！",
   "今日も達成！",
   "素晴らしい！",
);

$count  = count($fortune);
$random = rand(0, $count - 1);

echo $fortune[$random];

?>
</p>

@endsection


