@extends('layouts.main')


@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>User Privilage</th>
                <th>Image</th>
                <th>Roles</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            <span>{{ $role->name }},</span>
                        @endforeach
                    </td>
                    <td>
                        <img width="50px" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}"
                            alt="Image user">
                    </td>
                    <td>
                        <form action="{{ route('admin.roleUserHandler') }}" method="POST">
                            @csrf
                            <select name="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
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
