@extends('layouts.admin')
@section('title', 'ステップアップ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
               <h1>Life is beautiful!</h1>
               
               
                <!--エラーがあったら入力フォームへ戻る-->
<!--               @if(count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                       <li>{{ $e }} </li>
                       @endforeach
                    </ul>
                @endif                                    -->
                
                
<!--                <div class="form-group row">
                    <label for="goal" class="col-md-4 col-form-label text-md-right">{{ __('setGoal') }}</label>
                    <div class="col-md-6">
                       <input id="やり遂げたいこと" type="text" class="form-control @error('setgoal') is-invalid @enderror" name="goal" value="{{ old('setgoal') }}" required>   
                    </div>
                </div>                                     -->
                
                
                @error('setgoal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <p class="btn"><a href="/admin/movies/shuffle">Step</a></p>
            </div>
        </div>
    </div>
@endsection
