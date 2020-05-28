@extends('layouts.admin')
@section('title', 'ステップアップ')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
               <h1>Life is beautiful!</h1>
                <!--エラーがあったら入力フォームへ戻る-->
               @if(count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                       <li>{{ $e }} </li>
                       @endforeach
                       </ul>
                       @enfif
                   </ul>
                   <div class="form-group row">
                        <label for="goal" class="col-md-4 col-form-label text-md-right">{{ __('Goal') }}</label>
                        <div class="col-md-6">
                            <input id="goal" type="text" class="form-control @error('goal') is-invalid @enderror" name="goal" value="{{ old('goal') }}" required>

                                @error('goal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
           
                   
                   
                   </div> 
               
                <p class="btn"><a href="toroku.html">Step</a>
            </div>
        </div>
    </div>
@endsection