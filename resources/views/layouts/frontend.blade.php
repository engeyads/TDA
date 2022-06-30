<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/slider.css') }}" rel="stylesheet" />
        <!-- for SEO Keywords and metadata-->
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

    </head>
    <body id="page-top" dir="{{ __('home.direction') }}">
        @php
          $url = url()->full();
          $pos = strpos($url, app()->getLocale());
        @endphp
        @include('layouts.inc.header')


        <div class="content">
            @yield('content')
        </div>

        @include('layouts.inc.footer')

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('/assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('/assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/js/scripts.js') }}"></script>
        @yield('scripts')
    </body>
</html>
