@extends('layouts.frontend')

@section('title')
{{ __('channel.title') }}
@endsection
@section('titleForSEO')
{{ __('channel.titleForSEO') }}
@endsection

@section('description') {{ __('channel.description') }} @endsection
@section('keywords') {{ __('channel.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('channel.subtitle') }}</h1>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
