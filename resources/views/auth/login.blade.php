@extends('layouts.app')

@section('content')
    <div class="box-form">
        <!-- the text and social login-->
        <div class="left">
            <div class="overlay">
                <h1>{{ __('login.welcome') }}</h1>
                <p>{{ __('login.welcometext') }}</p>
                <span>
                    <!-- google login button-->
                    <p>{{ __('login.sociallogin') }}</p>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    <!-- script handles google login info-->
                    <script>
                        function onSignIn(googleUser) {
                            var profile = googleUser.getBasicProfile();
                            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                            console.log('Name: ' + profile.getName());
                            console.log('Image URL: ' + profile.getImageUrl());
                            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
                        }
                    </script>
                    <!-- facebook login button-->
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


            <h5>{{ __('login.name') }}</h5>
            <p> {{ __('login.noaccount') }} <a href="/register">{{ __('login.register') }}</a> {{ __('login.registertext') }}
            </p>
            <!-- the login form-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="inputs">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" placeholder="{{ __('login.username') }}" required
                        autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="{{ __('login.password') }}" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <br><br>

                <div class="remember-me--forget-password">
                    <!-- Angular -->
                    <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <span class="text-checkbox">{{ __('login.remember') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('login.forgot') }}
                        </a>
                    @endif
                </div>

                <br>
                <button type="submit" class="btn btn-primary">
                    {{ __('login.buttonlogin') }}
                </button>

            </form>
        </div>


    </div>
@endsection
