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
        <div class="sidebar"><div class="sidebar-content todo-sidebar d-flex">
  <span class="sidebar-close-icon">
    <i class="feather icon-x"></i>
  </span>
 <div class="todo-app-menu">
      <div class="form-group text-center add-task">
          <button type="button" class="btn btn-primary btn-block my-1 waves-effect waves-light" data-toggle="modal" data-target="#addTaskModal">اضافه کردن کار</button>
      </div>
      <div class="sidebar-menu-list ps ps--active-y">
          <div class="list-group list-group-filters font-medium-1">
              <a href="#" class="list-group-item list-group-item-action border-0 pt-0 active">
                  <i class="font-medium-5 feather icon-mail mr-50"></i>  همه</a>
          </div>
          <hr>
          <h5 class="mt-2 mb-1 pt-25">فیلترها</h5>
          <div class="list-group list-group-filters font-medium-1">
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i>ستاره دار</a>
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i>&nbsp; مهم</a>
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-check mr-50"></i>&nbsp; تکمیل شد</a>
              <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-trash mr-50"></i>&nbsp; حذف شده</a>
          </div>
          <hr>
          <h5 class="mt-2 mb-1 pt-25">برچسب ها</h5>
          <div class="list-group list-group-labels font-medium-1">
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> Frontend</a>
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> Backend</a>
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> مستند</a>
              <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> خطا</a>
          </div>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 517px; left: 253px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 510px;"></div></div></div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
  <div class="modal-content">
    <section class="todo-form">
      <form id="form-add-todo" class="todo-input" action="{{ route('role.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">اضافه کردن کار</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="todo-item-action ml-auto">
              <a class="todo-item-info"><i class="feather icon-info"></i></a>
              <a class="todo-item-favorite"><i class="feather icon-star"></i></a>
              <div class="dropdown todo-item-label">
                <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoLabel" data-toggle="dropdown">
                </i>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoLabel">
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="primary" data-value="Frontend">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Frontend</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="warning" data-value="Backend">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Backend</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="success" data-value="Doc">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>مستند</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="danger" data-value="Bug">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>خطا</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <fieldset class="form-group">
            <input type="text" name="role" class="new-todo-item-title form-control" placeholder="عنوان">
          </fieldset>

        </div>
        <div class="modal-footer">
          <fieldset class="form-group position-relative has-icon-left mb-0">
            <button type="button" onclick="console.log('hi')" class="btn btn-primary add-todo-item waves-effect waves-light" data-dismiss="modal"><i class="feather icon-check d-block d-lg-none"></i>
              <span class="d-none d-lg-block">اضافه کردن کار</span></button>
          </fieldset>
          <fieldset class="form-group position-relative has-icon-left mb-0">
            <button type="button" class="btn btn-outline-light waves-effect waves-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
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
          <div class="content-body"><div class="app-content-overlay"></div>
<div class="todo-app-area">
<div class="todo-app-list-wrapper">
    <div class="todo-app-list">
        <div class="app-fixed-search">
            <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
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
                          <input type="checkbox">
                          <span class="vs-checkbox vs-checkbox-sm">
                            <span class="vs-checkbox--check">
                              <i class="vs-icon feather icon-check"></i>
                            </span>
                          </span>
                      </div>
                      <h6 class="todo-title mt-50 mx-50">{{ $role->name }}</h6>
                    </div>
                    <div class="chip-wrapper">
                      <div class="chip mb-0">
                        <div class="chip-body">
                          <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="float-right todo-item-action d-flex">
                    <a class="todo-item-info"><i class="feather icon-info"></i></a>
                    <a class="todo-item-favorite"><i class="feather icon-star"></i></a>
                    <a class="todo-item-delete"><i class="feather icon-trash"></i></a>
                  </div>
                </div>
                <p class="todo-desc truncate mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              </li>
              @endforeach

            </ul>
            <div class="no-results">
               <h5>موردی یافت نشد</h5>
            </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 560px; left: 848px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 424px;"></div></div></div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTodoTask" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
  <div class="modal-content">
    <section class="todo-form">
      <form id="form-edit-todo" class="todo-input">
        <div class="modal-header">
          <h5 class="modal-title" id="editTodoTask">ویرایش کار</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="todo-item-action ml-auto">
              <a class="edit-todo-item-info todo-item-info"><i class="feather icon-info"></i></a>
              <a class="edit-todo-item-favorite todo-item-favorite"><i class="feather icon-star"></i></a>
              <div class="dropdown todo-item-label">
                <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoEditLabel" data-toggle="dropdown">
                </i>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoEditLabel">
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="primary" data-value="Frontend">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Frontend</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="warning" data-value="Backend">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>Backend</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="success" data-value="Doc">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>مستند</span>
                    </div>
                  </div>
                  <div class="dropdown-item">
                    <div class="vs-checkbox-con">
                        <input type="checkbox" data-color="danger" data-value="Bug">
                        <span class="vs-checkbox">
                          <span class="vs-checkbox--check">
                            <i class="vs-icon feather icon-check mr-0"></i>
                          </span>
                        </span>
                        <span>خطا</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <fieldset class="form-group">
            <input type="text" class="edit-todo-item-title form-control" placeholder="عنوان">
          </fieldset>
          <fieldset class="form-group">
              <textarea class="edit-todo-item-desc form-control" rows="3" placeholder="افزدون توضیحات"></textarea>
          </fieldset>
        </div>
        <div class="modal-footer">
          <fieldset class="form-group position-relative has-icon-left mb-0">
            <button type="button" class="btn btn-primary update-todo-item waves-effect waves-light" data-dismiss="modal"><i class="feather icon-edit d-block d-lg-none"></i>
              <span class="d-none d-lg-block">به روز رسانی</span></button>
          </fieldset>
          <fieldset class="form-group position-relative has-icon-left mb-0">
            <button type="button" class="btn waves-effect waves-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
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
  <script src="{{ asset('assets/backend/js/app-todo.min.js') }}"></script>
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
