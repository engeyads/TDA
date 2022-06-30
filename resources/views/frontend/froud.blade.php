@extends('layouts.frontend') <!-- Loads the main static page layout-->

@section('title') {{ __('froud.title') }} @endsection <!-- the title of the page that appears on the tab label of the browser-->

<!-- SEO Section-->
@section('titleForSEO') {{ __('froud.titleForSEO') }} @endsection <!-- the first heading line in the page <h1></h1> in the head of the page-->
@section('description') {{ __('froud.description') }} @endsection <!-- the description of the page in the metadata-->
@section('keywords') {{ __('froud.keywords') }} @endsection <!-- the keywords of the page in the metadata-->
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

<!-- Content Section-->
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('froud.subtitle') }}</h1> <!-- the title of the page that is being loaded from the translation files-->
            </div>
        </div>
    </div>

@endsection

<!-- Additional Scripts Section-->
@section('scripts')

@endsection
