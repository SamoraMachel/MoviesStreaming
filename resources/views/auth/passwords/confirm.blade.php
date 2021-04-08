@extends('layouts.main.backbone')

@section('mainBody')

<div class="sign section--bg" data-bg="{{ asset('storage/images/section.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form method="POST" action="{{ route('password.confirm') }}" class="sign__form">
                        @csrf

                        <a href="" class="sign__logo">
                            {{-- <img src="img/logo.svg" alt=""> --}}
                            <h2>Phoenix Movies</h2>
                        </a>

                        <div class="sign__group">
                            <input id="password" type="password" placeholder="Password" class="sign__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        
                        <button class="sign__btn" type="submit">Confirm Password</button>

                        @if (Route::has('password.request'))
                            <span class="sign__text">
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </span>
                            
                        @endif

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

{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
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
</div> --}}
@endsection
