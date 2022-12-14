<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
@extends('layouts.app')

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

                    {{ __('Вы авторизовались!') }}
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="container">
       <div class="d-flex justify-content-center w-100 py-5">
             <a href="/catalog"><button type="button" class="btn btn-success">Перейти на главную страницу</button></a>
       </div>
</div>
@endsection
