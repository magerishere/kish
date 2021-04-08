@extends('layouts.main')


@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Image</th>
                <th>Role</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <img width="50px" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}" alt="Image user">
                    </td>
                    <td>
                        <form action="{{ route('admin.roleUserHandler') }}" method="POST">
                            @csrf
                            <select name="role_id">
                                <option value="{{ $user->role->first()->id }}">{{ $user->role->first()->name }}</option>
                                @foreach ($roles as $role)
                                    @if ($role->id != $user->role->first()->id)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
