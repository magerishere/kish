@extends('layouts.main')


@section('content')
    <div class="container">
        <form action="{{ route('user.update',$user->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email ?: ''  }}" id="email">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation">Repeat password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>
            <button type="submit" class="btn btn-danger">Change password </button><span class="text-muted">you will logout automatically</span>
        </form>
    </div>
@endsection
