@auth
@php

    $countNotifications = \Illuminate\Support\Facades\DB::table('notifications')
    ->where('notifiable_id',auth()->user()->id)
    ->whereNull('read_at')
    ->count()

@endphp
@endauth
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
                        <a href="{{ route('welcome') }}" class="nav-link">{{ __('pages/index.main-page') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('setLanguage','en') }}" class="nav-link">En</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('setLanguage','fa') }}" class="nav-link">Fa</a>
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
        @guest
            <a href="{{ route('guest.login') }}" class="btn btn-primary">{{ __('pages/index.login-register') }}</a>
        @else
        @role('admin')
            <a href="{{ route('admin.index') }}" class="btn btn-dark">Chart Users</a>
            <a href="{{ route('permission.index') }}" class="btn btn-warning">Permissions</a>
            <a href="{{ route('role.index') }}" class="btn btn-info">Roles</a>
            <a href="{{ route('admin.usersList') }}" class="btn btn-success">Users list</a>
        @endrole
        <a href="{{ route('user.edit',auth()->user()->id) }}" class="btn btn-info">Setting</a>
        <a href="{{ route('chat.index') }}" class="btn btn-primary">Chat</a>
        <a href="{{ route('ticket.index') }}" class="btn btn-secondary">Tickets</a>
        <a href="{{ route('user.notification') }}" class="btn btn-light">Notification
        <span>{{ $countNotifications }}</span>
        </a>
        <form action="{{ route('user.logout') }}" method="POST" class="d-flex">
            @csrf

                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endguest
        </nav>
    </div>

