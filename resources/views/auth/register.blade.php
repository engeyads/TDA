@extends('layouts.app')
@section('content')
    <div class="box-form">
        <!-- the text and social Sign up-->
        <div class="left">
            <div class="overlay">
                <h1>{{ __('register.welcome') }}</h1>
                <p>{{ __('register.welcometext') }}</p>
                <span>
                    <!-- google register button-->
                    <p>{{ __('register.socialregister') }}</p>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    <!-- script handles google register info-->
                    <script>
                        function onSignIn(googleUser) {
                            var profile = googleUser.getBasicProfile();
                            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                            console.log('Name: ' + profile.getName());
                            console.log('Image URL: ' + profile.getImageUrl());
                            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
                        }
                    </script>
                    <!-- facebook register button-->
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0"
                                        nonce="cpdVkvXK"></script>
                    <div class="fb-login-button" data-width="" data-size="medium" data-button-type="login_with"
                        data-layout="default" data-auto-logout-link="true" data-use-continue-as="false"></div>
                </span>

            </div>

        </div>


        <div class="right">
            <!-- This shows the language bar and back button-->


                @if( __('footer.language') !== "ar")
                <div style="float:right">
                    @include('partials/language_switcher')
                </div>
                <div style="float:unset"><br /><br /></div>
                <div>
                    <a href="/" title="Back to home page" class="backbtn" style="float:right">{{ __('login.back') }} <i class="fa fa-chevron-right"></i></a>
                </div>
                @else
                    <div style="float:left">
                        @include('partials/language_switcher')
                    </div>
                    <div style="float:unset;"><br /><br /></div>
                    <div>
                        <a href="/" title="Back to home page" class="backbtn" style="float:left">{{ __('login.back') }} <i class="fa fa-chevron-left"></i></a>
                    </div>
                @endif

            <br />


            <h5>{{ __('register.name') }}</h5>
            <p> {{ __('register.hasaccount') }} <a href="/login">{{ __('register.login') }}</a> {{ __('register.logintext') }}
            </p>
            <!-- the register form-->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="inputs">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('register.username') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('register.email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="{{ __('register.password') }}" required
                        autocomplete="current-password">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('register.confirmpassword') }}" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <br>
                <button type="submit" class="btn btn-primary">
                    {{ __('register.buttonregister') }}
                </button>

            </form>
        </div>


    </div>
@endsection
