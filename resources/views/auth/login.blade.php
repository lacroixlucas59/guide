@extends('layouts.template')

@section('content')
    <h1 class="c">{{ __('Login') }}</h1>
              
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                          
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div>                                              
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
        <label class="form-check-label" for="remember">
                                      
            {{ __('Remember Me') }}
                                 
        </label>
    </div>                       
                              
        <button type="submit" class="btn btn-primary">
           {{ __('Login') }}
        </button>

                                
        @if (Route::has('password.request'))
                                 
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                     
            {{ __('Forgot Your Password?') }}
                                 
        </a>
                             
        @endif
                   
    </form>
@endsection
