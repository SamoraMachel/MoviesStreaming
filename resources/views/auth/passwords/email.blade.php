@extends('layouts.main.backbone')

@section('mainBody')

<div class="sign section--bg" data-bg="{{ asset('storage/images/section.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form method="POST" action="{{ route('password.email') }}" class="sign__form">
                        @csrf

                        <a href="" class="sign__logo">
                            {{-- <img src="img/logo.svg" alt=""> --}}
                            <h2>Phoenix Movies</h2>
                        </a>

                        <div class="sign__group">
                            <input id="email" type="email" placeholder="Email" class="sign__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        
                        <button class="sign__btn" type="submit">Send Email</button>

                        <span class="sign__text">We will send a password to your Email</span>

                        @error('email')
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
