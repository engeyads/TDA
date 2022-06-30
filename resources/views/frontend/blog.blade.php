@extends('layouts.frontend')

@section('title')
{{ __('blog.title') }}
@endsection
@section('titleForSEO')
{{ __('blog.titleForSEO') }}
@endsection

@section('description') {{ __('blog.description') }} @endsection
@section('keywords') {{ __('blog.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('blog.subtitle') }}</h1>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
