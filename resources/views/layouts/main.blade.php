@include('layouts.header')





{{-- <div class="container"> --}}
    @include('layouts.messages')
    {{-- </div>  --}}
    @yield('content')

@include('layouts.footer')
