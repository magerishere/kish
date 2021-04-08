@extends('layouts.main')

@section('content')
<h1 class="text-center">Profile</h1>
<div class="row">
    <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <div class="mb-3">
            <img width="50px" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}" alt="Image User">
            <label for="exampleInputPassword1" class="form-label"><input type="file" name="image" class="form-control"></label>
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" value="{{ $user->meta ? $user->meta->name : '' }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label>
            <select name="gender" class="form-select">
                    <option value="">{{ $user->meta ? $user->meta->gender ? "Female" : "Male" : '' }}</option>

                    @if ($user->meta)
                        @if ($user->meta->gender)
                            <option value="1">Male</option>
                        @else
                            <option value="1">Female</option>
                        @endif

                    @endif

            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" value="{{ $user->meta ? $user->meta->phone_number : '' }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $user->meta ? $user->meta->address : '' }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Year old</label>
            <input type="text" name="year" class="form-control" value="{{ $user->meta ? $user->meta->year : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
      </form>
</div>
@endsection
