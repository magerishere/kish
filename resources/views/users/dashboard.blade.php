@extends('layouts.main')


@section('content')
    <h1 class="text-center">dashboard</h1>
    <div class="row">

        <div class="col-md-6">
            <h4>Your email is : {{ $user->email }}</h4>
            <h5>Your role is :
                <span>{{ $user->role->first()->name }}</span>
            </h5>
            <img width="50px" src="{{ $user->image ? $user->image->url : "/storage/images/avatar.png" }}" alt="Image">
        </div>

        <div class="col-md-6">
            <form action="" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Current password</label>
                  <input type="password" name="oldPassword" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">New password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                <button type="submit" class="btn btn-primary">Change</button>
              </form>
        </div>
        <div class="col-md-6">
            <a href="{{ route('user.show',$user->id) }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
@endsection
