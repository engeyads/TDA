@extends('layouts.app')
@include('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('login.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{ __('login.welcomback') }} <a href="{{ url('profile') }}">{{ auth()->user()->name }}</a>
                    <a href="{{ url('logout') }}">{{ __('login.logout') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
