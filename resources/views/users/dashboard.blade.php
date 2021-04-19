@extends('layouts.main')


@section('content')
    <h1 class="text-center">dashboard</h1>
    <div class="row">

        <div class="col-md-6">
            <h4>Your email is : {{ $user->email }}</h4>
            <h5>Your role is : </h5>
            <h5>Your api token is :
                {{-- @if ($api_token) --}}
                    {{-- {{ $api_token->token }} --}}
                    {{-- <form action="{{ route('api_token') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">مشاهده امتیازات توکن</button>
                    </form> --}}
                {{-- @else --}}
                    {{-- <span>شما هنوز توکنی ندارید</span> --}}
                    {{-- <form action="{{ route('token_register') }}" method="POST"> --}}
                        {{-- @csrf --}}
                        {{-- <button type="submit" class="btn btn-warning">دریافت ای پی آی توکن</button> --}}
                    {{-- </form> --}}
                {{-- @endif --}}
            </h5>
            <img width="50px" src="{{ $user->image ? $user->image->url : "/storage/images/avatar.png" }}" alt="Image">
            <a href="{{ route('user.show',$user->id) }}" class="btn btn-primary">Edit Profile</a>

        </div>


    </div>
@endsection
