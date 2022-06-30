@extends('layouts.frontend')

@section('title')
{{ __('properties.title') }}
@endsection
@section('titleForSEO')
{{ __('properties.titleForSEO') }}
@endsection

@section('description') {{ __('properties.description') }} @endsection
@section('keywords') {{ __('properties.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('properties.subtitle') }}</h1>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
