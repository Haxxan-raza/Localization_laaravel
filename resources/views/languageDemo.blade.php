
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">
                    <ul>
                        <li>{{ __('messages.dashboard') }}</li>
                        <li>{{ __('messages.about') }}</li>
                        <li>{{ __('messages.contact') }}</li>
                        <li>{{ __('messages.welcome') }}</li>
                       </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('messages.login') }}
                    <h1>{{__('messages.home')}}</h1>
                </div>
            </div>
        </div>
    </div>
   
                                    
</div>


</body>
</html>
@endsection
