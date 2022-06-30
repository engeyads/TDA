@extends('layouts.frontend')

@section('title')
تركيا شقة الأحلام | كاميران - {{ __('rent.title') }}
@endsection
@section('titleForSEO')
{{ __('rent.titleForSEO') }}
@endsection

@section('description') {{ __('rent.description') }} @endsection
@section('keywords') {{ __('rent.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('rent.subtitle') }}</h1>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
