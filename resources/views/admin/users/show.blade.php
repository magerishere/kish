@extends('layouts.main')


@section('content')
<div class="row">
    <div id="message">

    </div>
    <div class="col-md-6">
        <h3>{{ $user->email }}</h3>
        <img width="50px" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}" alt="User image">
        <h4>Roles :
            @foreach ($user->roles as $role)
            <span>{{ $role->name }}, </span>
            @endforeach
        </h4>
        <h5>Permissions :
            @foreach ($user->permissions as $permission)
            <span>{{ $permission->name }}, </span>
            @endforeach
        </h5>
    </div>
    <div class="col-md-6">
        <h4>Roles</h4>
        <ul id="rolesList">
            @foreach ($roles as $role)
                <li><input type="checkbox" class="checkBox" value="{{ $role->id }}"  {{ $user->hasRole($role->id) ? "checked" : '' }} onclick="selectedCheckBoxRolesHandler({{ $role->id }})" id=""><span>{{ $role->name }}</span></li>
            @endforeach
        </ul>
        <hr>
        <h4>Permissions</h4>
        <ul id="permissionsList">
            @foreach ($permissions as $permission)
                <li><input type="checkbox" class="checkBox" value="{{ $role->id }}"   {{ $user->hasPermissionTo($permission->id) ? 'checked' : '' }} onclick="selectedCheckBoxPermissionsHandler({{ $permission->id }})" id=""><span>{{ $permission->name }}</span></li>
            @endforeach
        </ul>
    </div>
    <button class="btn btn-primary" onclick="userRoleAndPermissionHandler({{ $user->id }})">Update User</button>
</div>
@endsection


@section('footer')
<script>
    let roleIds = [];
    let permissionIds = [];
    let index;
    const message = document.getElementById('message');
    $(document).ready(function(){
        Array.from($('.checkBox')).forEach(element => {
            if(element.closest('#rolesList') && element.checked) {
                roleIds.push(element.value);
            } else if(element.closest('#permissionsList') && element.checked) {
                permissionIds.push(element.value);
            }
        });
        console.log(roleIds,permissionIds);
    });
    const selectedCheckBoxRolesHandler = (id) => {
            index = roleIds.indexOf(JSON.stringify(id));
            if (index == -1) {
                roleIds.push(JSON.stringify(id));
            } else {
                roleIds.splice(index,1);
            }
            console.log(roleIds);
        }

        const selectedCheckBoxPermissionsHandler = (id) => {
            index = permissionIds.indexOf(JSON.stringify(id));
            if (index == -1) {
                permissionIds.push(JSON.stringify(id));
            } else {
                permissionIds.splice(index,1);
            }
            console.log(permissionIds);
        }

    const userRoleAndPermissionHandler = (id) => {
        $.ajax({
            url: `/user-list/${id}/role-permission-handler`,
            type: "POST",
            data: {roleIds,permissionIds},
            success:function(res) {
                message.innerHTML = "<h1 class='text-center bg-success'>Success</h1>";
            },error:function(err) {
                message.innerHTML = "<h1 class='text-center bg-danger'>Error</h1>";
                console.log(err);
            },
        });
    }
    </script>
@endsection
