@extends('layouts.frontend') <!-- Loads the main static page layout-->

@section('title') {{ __('home.title') }} @endsection <!-- the title of the page that appears on the tab label of the browser-->

<!-- SEO Section-->
@section('titleForSEO') {{ __('home.titleForSEO') }} @endsection <!-- the first heading line in the page <h1></h1> in the head of the page-->
@section('description') {{ __('home.description') }} @endsection <!-- the description of the page in the metadata-->
@section('keywords') {{ __('home.keywords') }} @endsection <!-- the keywords of the page in the metadata-->
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

<!-- Content Section-->
@section('content')

    <!-- Slider-->
    @include('layouts.inc.slider')
    <!-- Services-->
    @include('layouts.inc.services')
    <!-- About-->
    @include('layouts.inc.about')
    <!-- Team-->
    @include('layouts.inc.team')
    <!-- Clients-->
    @include('layouts.inc.clients')
    <!-- Contact-->
    @include('layouts.inc.contactForm')

@endsection


@section('scripts')

@endsection
