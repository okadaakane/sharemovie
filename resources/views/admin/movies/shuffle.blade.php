@extends('layouts.admin')
@section('title', '登録された目標')

@section('content')
    <div class="container">
        <div class="row">
            <h2>What is your goal from now on?</h2>
        </div>
       
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <table>
                            <!-- table header -->
                               @foreach($posts as $movies)
                                <tr>
                                    <th> $movies->id </th>
                                    <td> ($movies->name, 100) </td>
                                    <td>{{ \Str::limit($movies->setgoal, 250) }}</td>
                                </tr>
                            @endforeach
                    </table>                        
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="setgoal" class="col-md-4 col-form-label text-md-right">{{ __('Goal') }}</label>
        <div class="col-md-6">
           <input id="setgoal" type="text" class="form-control @error('setgoal') is-invalid @enderror" name="setgoal" value="{{ old('setgoal') }}" required>   
        </div>
    </div>
    <h2>
        <div class="form-group row mb-0">
            <p class=btn><a href="{{ action('Admin\MoviesController@update', ['setgoal' => $setgoal]) }}">
                {{ __('追加') }}</a>
            </p>
        </div>
    </h2>
     <h2>
        <div class="form-group row mb-0">
            <p class=btn><a href="{{ action('Admin\MoviesController@delete', ['setgoal' => $setgoal]) }}">
                {{ __('削除') }}</a>
            </p>
        </div>
    </h2>
@endsection
<!-- ランダムでメッセージを出す -->
@section('layouts.shufflemessage')




