@extends('layouts.main')



@section('content')
    <div class="row">
        <h1 class="text-center">Permissions</h1>
        <hr>
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('pages/admin/permission.name') }}</th>
                        <th>{{ __('pages/admin/permission.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td onclick="editHandler({{ $permission->id }})">
                                <input type="text" id="permission{{ $permission->id }}" value="{{ $permission->name }}"
                                    class="text-center" disabled>
                                <span id="message{{ $permission->id }}"></span>
                            </td>

                            <td>
                                <form action="{{ route('permission.destroy', $permission->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger"
                                        type="submit">{{ __('pages/admin/permission.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h5>{{ __('pages/admin/permission.create') }}</h5>
            <hr>
            <form action="{{ route('permission.store') }}" method="POST" class="d-flex">
                @csrf
                <div class="mb-3">
                    <label for="name">{{ __('pages/admin/permission.name') }}</label>
                    <input type="text" name="name" id="name" class="form-control" autofocus required>
                    <button type="submit" class="btn btn-primary">{{ __('pages/admin/permission.create') }}</button>
                </div>
            </form>

        </div>

    </div>

@endsection


@section('footer')

    <script>
        let currentInput;
        let currentId;
        let currentName;
        let message;
        let ids = [];
        const editHandler = (id) => {
            currentInput = document.getElementById(`permission${id}`);
            currentInput.disabled = false;
            currentId = id;
        }


        const selectedCheckBoxHandler = (id) => {
            const index = ids.indexOf(id);
            if (index == -1) {
                ids.push(id);
            } else {
                ids.splice(index,1);
            }
            console.log(ids);
        }


        $(document).on('keypress',function(e) {
            currentName = document.getElementById(`permission${currentId}`).value;
            if(e.which == 13) {
                $.ajax({
                    type: "PATCH",
                    url:  `/permission/${currentId}`,
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

