@extends('layouts.main')

@section('header')
<link rel="stylesheet" href="{{ asset('assets/backend/css/app-todo.min.css') }}">
@endsection

@section('content')
<div class="app-content content todo-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar d-flex">
                    <span class="sidebar-close-icon">
                        <i class="feather icon-x"></i>
                    </span>
                    <div class="todo-app-menu">
                        <div class="form-group text-center add-task">
                            <button type="button" class="btn btn-primary btn-block my-1 waves-effect waves-light"
                                data-toggle="modal" data-target="#addTaskModal">اضافه کردن نقش</button>
                        </div>
                        <div class="sidebar-menu-list ps ps--active-y">

                          <hr>

                            <h5 class="mt-2 mb-1 pt-25"><a href="{{ route('permission.index') }}">امتیازات</a></h5>
                            <div class="list-group list-group-labels font-medium-1">
                                @foreach ($permissions as $permission)
                                <a href="#"
                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span
                                        class="bullet bullet-primary mr-1"></span> {{ $permission->name }}</a>
                                @endforeach


                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 517px; left: 253px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 510px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                        <div class="modal-content">
                            <section class="todo-form">
                                <form id="form-add-todo" class="todo-input" action="{{ route('role.store') }}"
                                    method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">اضافه کردن نقش</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="todo-item-action ml-auto">
                                            <a class="todo-item-info"><i class="feather icon-info"></i></a>
                                            <a class="todo-item-favorite"><i class="feather icon-star"></i></a>
                                            <div class="dropdown todo-item-label">
                                                <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoLabel"
                                                    data-toggle="dropdown">
                                                </i>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="todoLabel">
                                                    @foreach ($permissions as $permission)

                                                    <div class="dropdown-item">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox" value="{{ $permission->id }}"
                                                                data-color="primary"
                                                                data-value="{{ $permission->name }}">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check mr-0"></i>
                                                                </span>
                                                            </span>
                                                            <span>{{ $permission->name }}</span>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <input type="text" name="role" class="new-todo-item-title form-control"
                                                placeholder="عنوان">

                                        </fieldset>
                                        @foreach ($permissions as $permission)

                                        <div class="title-wrapper d-flex">
                                            <div class="vs-checkbox-con">
                                                <input type="checkbox" class="permissionId" data-value="{{ $permission->name }}" value="{{ $permission->id }}">
                                                <span class="vs-checkbox vs-checkbox-sm">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <h6 class="todo-title mt-50 mx-50">{{ $permission->name }}</h6>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="modal-footer">
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <button type="button"
                                                class="btn btn-primary add-todo-item waves-effect waves-light"
                                                data-dismiss="modal"><i
                                                    class="feather icon-check d-block d-lg-none"></i>
                                                <span class="d-none d-lg-block">اضافه کردن نقش</span></button>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <button type="button" class="btn btn-outline-light waves-effect waves-light"
                                                data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                <span class="d-none d-lg-block">لغو</span></button>
                                        </fieldset>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="app-content-overlay"></div>
                    <div class="todo-app-area">
                        <div class="todo-app-list-wrapper">
                            <div class="todo-app-list">
                                <div class="app-fixed-search">
                                    <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i>
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                        <input type="text" class="form-control" id="todo-search" placeholder="جستجو...">
                                        <div class="form-control-position">
                                            <i class="feather icon-search"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="todo-task-list list-group ps ps--active-y">
                                    <ul class="todo-task-list-wrapper media-list">
                                        @foreach ($roles as $role)

                                        <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                            <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                <div class="todo-title-area d-flex align-items-center">
                                                    <div class="title-wrapper d-flex">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox" class="roleId"
                                                                value="{{ $role->id }}">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <h6 class="todo-title mt-50 mx-50">{{ $role->name }}</h6>
                                                    </div>
                                                    <div class="chip-wrapper">
                                                    @foreach ($role->permissions as $permission)

                                                        <div class="chip mb-0">
                                                            <div class="chip-body">
                                                                <span class="chip-text"
                                                                    data-value="{{ $permission->name }}"><span
                                                                        class="bullet bullet-primary bullet-xs"></span>
                                                                    {{ $permission->name }}</span>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>

                                                </div>
                                                <div class="float-right todo-item-action d-flex">
                                                    <a class="todo-item-info"><i class="feather icon-info"></i></a>
                                                    <a class="todo-item-favorite"><i class="feather icon-star"></i></a>
                                                    <a class="todo-item-delete" data-value="{{ $role->id }}"><i
                                                            class="feather icon-trash"></i></a>
                                                </div>
                                            </div>

                                        </li>
                                        @endforeach

                                    </ul>
                                    <div class="no-results">
                                        <h5>موردی یافت نشد</h5>
                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: 560px; left: 848px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 424px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->


                    <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog"
                        aria-labelledby="editTodoTask" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                            role="document">
                            <div class="modal-content">
                                <section class="todo-form">
                                    <form id="form-edit-todo" class="todo-input">
                                        <input type="hidden" class="roleId" value="">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editTodoTask">ویرایش نقش</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="todo-item-action ml-auto">
                                                <a class="edit-todo-item-info todo-item-info"><i
                                                        class="feather icon-info"></i></a>
                                                <a class="edit-todo-item-favorite todo-item-favorite"><i
                                                        class="feather icon-star"></i></a>
                                                <div class="dropdown todo-item-label">
                                                    <i class="dropdown-toggle mr-0 mb-1 feather icon-tag"
                                                        id="todoEditLabel" data-toggle="dropdown">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="todoEditLabel">
                                                        @foreach ($permissions as $permission)

                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" value="{{ $permission->id }}"
                                                                    data-color="primary"
                                                                    data-value="{{ $permission->name }}">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>{{ $permission->name }}</span>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <input type="text" class="edit-todo-item-title form-control"
                                                    placeholder="عنوان">
                                            </fieldset>
                                            @foreach ($permissions as $permission)

                                        <div class="title-wrapper d-flex">
                                            <div class="vs-checkbox-con">
                                                <input type="checkbox" class="permissionIdUpdate" data-value="{{ $permission->name }}"  value="{{ $permission->id }}">
                                                <span class="vs-checkbox vs-checkbox-sm">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <h6 class="todo-title mt-50 mx-50">{{ $permission->name }}</h6>
                                        </div>
                                        @endforeach
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button"
                                                    class="btn btn-primary update-todo-item waves-effect waves-light"
                                                    data-dismiss="modal"><i
                                                        class="feather icon-edit d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">به روز رسانی</span></button>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button" class="btn waves-effect waves-light"
                                                    data-dismiss="modal"><i
                                                        class="feather icon-x d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">لغو</span></button>
                                            </fieldset>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('footer')
<script src="{{ asset('assets/backend/js/app-todo-roles.min.js') }}"></script>
<script>
    $('.searchPermissions').on('click',function() {

        const parentName = $(this).data('value');
        const roleName = $('.edit-todo-item-title').val();
        const select = $(this).next();
        let options;
        if (select.find('option').length == 0) {

        $.ajax({
            type: 'post',
            url: '/role/search/permissions',
            data: {parentName,roleName},
            success:function(res) {
                select.show();
                // console.log(res.roleHasPermissions.id);
                if(res.permissions.length > 1) {
                    res.permissions.forEach(permission => {
                        options += `<option value=${permission.id} `;
                        res.roleHasPermissions.forEach(roleHasPermission => {
                            if(permission.id == roleHasPermission.id)
                            {
                                options += "selected";
                            }
                        });
                        options += `> ${permission.name} </option>`;
                    });
                    console.log(options);
                        select.append(options);

                } else {
                    select.append('<option class="text-center" disabled>No child</option>');
                }
            },error:function(err) {
                console.log(err);
            },
        });
    } else {
        select.toggle();
    }
    });


</script>
@endsection
