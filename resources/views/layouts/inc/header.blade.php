<!-- header -->
<h1 style="position:absolute;color:white">@yield('titleForSEO')</h1> <!-- Here the SEO from the child blade is going to be shown-->

<!-- Masthead-->
    <!-- <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Studio!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </header> -->
<header >

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark"  id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/"><img src="{{ asset('/assets/img/navbar-logo-dark.svg') }}" alt="" /></a>

        </div>
        @include('partials/language_switcher')
        @if (Route::has('login'))
        <div class="top-right links" style="z-index:10000;">
            @auth
                <div>{{ __('login.welcomback') }} <span><a href="{{ url('profile') }}">{{ auth()->user()->name }}</a></span> ! <span><a href="{{ url('home') }}">{{ __('login.dashboard') }}</a></span> <span><a href="{{ url('logout') }}">{{ __('login.logout') }}</a></span></div>
                
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
        @endif
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            {{ __('menu.menu') }}
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse"  id="navbarResponsive">
            <center>
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">{{ __('menu.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/istanbul-properties">{{ __('menu.istanbul_properties') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/properties">{{ __('menu.properties') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/wednesday">{{ __('menu.wednesday') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/rent">{{ __('menu.rent') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/froud">{{ __('menu.froud') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/blog">{{ __('menu.blog') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/channel">{{ __('menu.channel') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/about">{{ __('menu.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/dictionary">{{ __('menu.dictionary') }}</a></li>
                </ul>
            </center>
        </div>
    </nav>
</header>
