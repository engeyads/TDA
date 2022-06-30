@extends('layouts.frontend')

@section('title')
{{ __('dictionary.title') }}
@endsection
@section('titleForSEO')
{{ __('dictionary.titleForSEO') }}
@endsection

@section('description') {{ __('dictionary.description') }} @endsection
@section('keywords') {{ __('dictionary.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('dictionary.subtitle') }}</h1>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
