@extends('layouts.frontend')

@section('title')
{{ __('istanbulproperties.title') }}
@endsection
@section('titleForSEO')
{{ __('istanbulproperties.titleForSEO') }}
@endsection

@section('description') {{ __('istanbulproperties.description') }} @endsection
@section('keywords') {{ __('istanbulproperties.keywords') }} @endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ __('istanbulproperties.subtitle') }}</h1>
            </div>
            <!-- Portfolio-->
    @include('layouts.inc.portfolio')
        </div>
    </div>

@endsection

@section('scripts')

@endsection
