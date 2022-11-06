@extends('layouts.app')

@section('css')
    <link href="{{ mix('css/test.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <br>

            <div class="alert alert-success" role="alert">
                Here!
            </div>

            <div class="red-colour">
                Red
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ mix('js/test.js') }}" defer></script>
@endsection
