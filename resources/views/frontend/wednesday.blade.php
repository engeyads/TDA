@extends('layouts.frontend')

@section('title')
{{ __('wednesday.title') }}
@endsection
@section('titleForSEO')
{{ __('wednesday.titleForSEO') }}
@endsection

@section('description') {{ __('wednesday.description') }} @endsection
@section('keywords') {{ __('wednesday.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('wednesday.subtitle') }}</h1>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
