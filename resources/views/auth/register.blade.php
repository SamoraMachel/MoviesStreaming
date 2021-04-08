@extends('layouts.main.backbone')

@section('mainBody')

    <div class="sign section--bg" data-bg="{{ asset('storage/images/section.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- registration form -->
                        <form method="POST" action="{{ route('register') }}" class="sign__form">
                            @csrf

                            <a href="" class="sign__logo">
                                {{-- <img src="img/logo.svg" alt=""> --}}
                                <h2>Phoenix Movies</h2>
                            </a>

                            <div class="sign__group">
                                <input id="name" type="text" placeholder="Name" class="sign__input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>

                            <div class="sign__group">
                                <input id="email" type="email" placeholder="Email" class="sign__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="sign__group">
                                <input id="password" type="password" placeholder="Password" class="sign__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>

                            <div class="sign__group">
                                <input id="password-confirm" type="password" placeholder="Password Confirm" class="sign__input form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="sign__group sign__group--checkbox">
                                <input id="remember" name="remember" type="checkbox" checked="checked">
                                <label for="remember">I agree to the <a href="privacy.html">Privacy Policy</a></label>
                            </div>
                            
                            <button class="sign__btn" type="submit">Sign up</button>

                            <span class="sign__text">Already have an account? <a href="{{ route('password.confirm') }}">Sign in!</a></span>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
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
                        <!-- registration form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
