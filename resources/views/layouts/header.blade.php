<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @yield('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href='{{ url("/sms/post/ws.sms.ir/") }}' class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ __('pages/index.main-page') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ __('pages/index.articles') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ __('pages/index.apartments') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ __('pages/index.contact-us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ __('pages/index.about-us') }}</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('guest.login') }}" class="btn btn-primary">{{ __('pages/index.login-register') }}</a>
        </nav>
    </div>

