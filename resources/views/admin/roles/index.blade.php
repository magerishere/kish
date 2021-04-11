@extends('layouts.main')


@section('content')
    <div class="row">
        <h1 class="text-center">Roles</h1>
        <hr>
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('pages/admin/role.name') }}</th>
                        <th>{{ __('pages/admin/role.permissions') }}</th>
                        <th>{{ __('pages/admin/role.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td onclick="editHandler({{ $role->id }})">
                                <input type="text" id="role{{ $role->id }}" value="{{ $role->name }}"
                                    class="text-center" disabled>
                                <span id="message{{ $role->id }}"></span>
                            </td>

                            <td>
                                @foreach ($role->permissions as $permission)
                                    <span>{{ $permission->name }}, </span>

                                @endforeach
                            </td>

                            <td>

                                <a href="{{ route('role.edit',$role->id) }}" class="btn btn-warning">{{ __('pages/admin/permission.update-permissions') }}</a>
                                <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger"
                                        type="submit">{{ __('pages/admin/role.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h5>{{ __('pages/admin/role.create') }}</h5>
            <hr>
            <form action="{{ route('role.store') }}" method="POST" class="d-flex">
                @csrf
                <div class="mb-3">
                    <label for="name">{{ __('pages/admin/role.name') }}</label>
                    <input type="text" name="name" id="name" class="form-control" autofocus required>
                    <button type="submit" class="btn btn-primary">{{ __('pages/admin/role.create') }}</button>
                </div>
            </form>
            <div id="permission">

            </div>
        </div>

    </div>

@endsection


@section('footer')

    <script>
        let currentInput;
        let currentId;
        let currentName;
        let message;

        const editHandler = (id) => {
            currentInput = document.getElementById(`role${id}`);
            currentInput.disabled = false;
            currentId = id;
        }




        $(document).on('keypress',function(e) {
            currentName = document.getElementById(`role${currentId}`).value;
            if(e.which == 13) {
                $.ajax({
                    type: "PATCH",
                    url:  `/role/${currentId}`,
                    data: {name:currentName},
                    success:function(res) {
                        if(message) message.innerHTML = '';
                        message = document.getElementById(`message${currentId}`);
                        message.innerHTML = "success";
                        message.classList.add('text-success');
                        currentInput.disabled = true;
                    },error:function(err) {
                        let message = document.getElementById(`message${currentId}`);
                        message.innerHTML = "error";
                        message.classList.add('text-danger');

                    },
                });
            }
        });

    </script>
@endsection
