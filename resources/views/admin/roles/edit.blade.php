@extends('layouts.main')

@section('content')
    <div class="row">

        <div id="message">


        </div>
        <div class="col-md-4">
            <h3>{{ $role->name }}</h3>
            <button class="btn btn-primary" onclick="rolePermissionSubmit({{ $role->id }})">Update Permission</button>

        </div>

        <div class="col-md-8">
            <ul class="list-group-item">
                @foreach ($permissions as $permission)
                    <li class="list-item">
                        <input type="checkbox" class="checkBox" value="{{ $permission->id }}" onclick="selectedCheckBoxHandler({{ $permission->id }})"
                            {{ $role->hasPermissionTo($permission) ? 'checked' : '' }}><span>{{ $permission->name }}</span>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection


@section('footer')
    <script>
          let ids = [];
            const message = document.getElementById('message');
        $(document).ready(function(){
            Array.from(document.getElementsByClassName('checkBox')).forEach(element => {
                if(element.checked) ids.push(element.value);
            });
            console.log(ids);
        });
        const selectedCheckBoxHandler = (id) => {
            const index = ids.indexOf(JSON.stringify(id));
            if (index == -1) {
                ids.push(JSON.stringify(id));
            } else {
                ids.splice(index,1);
            }
            console.log(ids);
        }

        const rolePermissionSubmit = (id) => {

            $.ajax({
                url: `/role/${id}/update/permissions`,
                type: "POST",
                data: {ids},
                success:function(res) {
                    message.innerHTML = `<h1 class='text-center bg-success'>Success</h1>`;
                },error:function(err) {
                    message.innerHTML = `<h1 class='text-center bg-danger'>Error</h1>`;
                    console.log(err);
                },
            });
        }

    </script>
@endsection
