@extends('layouts.main')


@section('content')
    <h1 class="text-center">User Lists</h1>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Image</th>
                <th>Roles</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <img width="50px" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}"
                            alt="Image user">
                    </td>
                    <td>
                        @foreach ($user->roles as $role)
                            <span>{{ $role->name }},</span>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($user->permissions as $permission)
                            <span>{{ $permission->name }}, </span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.userList',$user->id) }}" class="btn btn-primary">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
