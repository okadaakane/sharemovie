@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box card">
                    <div class="login-header card-header ">{{ __('Login') }}</div>
                    
                    <!--  ここから form  -->
                    <div class="login-body card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        
                             <!-- エラーがあれば無効、なければnulを返す -->
                            <div class="form-group">
                                <label for="name" class="col-form-label">Name</label>
                                <div class="">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!--エラーメッセージ-->
                            @if ($errors->has('name'))                                        
                            <span class="invalid-feedback">
                                  <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif      
              
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection