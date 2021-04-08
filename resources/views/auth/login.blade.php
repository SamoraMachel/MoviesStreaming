@extends('layouts.main.backbone')

@section('mainBody')

    <div class="sign section--bg" data-bg="{{ asset('storage/images/section.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- authorization form -->
                        <form class="sign__form" method="POST" action="{{ route('login') }}" >
                            @csrf

                            <a href="/login" class="sign__logo">
                                {{-- <img src="img/logo.svg" alt=""> --}}
                                <h2>Phoenix Movies</h2>
                            </a>

                            <div class="sign__group">
                                <div class="">
                                    <input id="email" type="email" class="sign__input" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
    
                                    
                                </div>
                            </div>

                            <div class="sign__group">
                                <div class="">
                                    <input id="password" type="password" class="sign__input" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
    
                                </div>
                            </div>

                            <div class="sign__group sign__group--checkbox">
                                <div class="">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="sign__btn" type="submit">Sign in</button>

                            

                            <span class="sign__text">Don't have an account? <a href="/register">Sign up!</a></span>

                            @if (Route::has('password.request'))
                                <span class="sign__text">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </span>
                                
                            @endif

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </form>
                        <!-- end authorization form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
