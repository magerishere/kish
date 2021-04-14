@include('layouts.header')
@auth
@php

    $countNotifications = \Illuminate\Support\Facades\DB::table('notifications')
    ->where('notifiable_id',auth()->user()->id)
    ->whereNull('read_at')
    ->count()

@endphp
@endauth




{{-- <div class="container"> --}}
    @include('layouts.messages')
    {{-- </div>  --}}
    @yield('content')

@include('layouts.footer')
