@extends('layouts.main')


@section('header')

    <link rel="stylesheet" href="{{ asset('assets/backend/css/ag-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/ag-theme-material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/aggrid.min.css') }}">
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover-animation mb-0">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" ></th>
                                        <th scope="col">آیدی</th>
                                        <th scope="col">عکس</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">شماره تلفن همراه</th>
                                        <th scope="col">ایمیل</th>
                                        <th>مشاهده</th>
                                    </tr>
                                </thead>
                                <a href="{{ route('registrations.export_mapping') }}" class="btn btn-success">Excel</a>
                                  <tbody>
                                      @foreach ($users as $user)

                                      <tr>
                                          <th><input type="checkbox" ></th>
                                          <th scope="row">{{ $user->id }}</th>
                                          <td><img width="50px" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}" alt=""></td>
                                          <td>{{ $user->meta->name }}</td>
                                          <td>{{ $user->phone_number }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td><a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">مشاهده</a></td>
                                        </tr>
                                        @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- users filter end -->
                    <!-- Ag Grid users list section start -->
                    <div id="basic-examples">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                                                <div class="dropdown sort-dropdown mb-1 mb-sm-0">
                                                    <button
                                                        class="btn btn-white filter-btn dropdown-toggle border text-dark waves-effect waves-light"
                                                        type="button" id="dropdownMenuButton6" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"> 1 - 20 از 50</button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton6">
                                                        <a class="dropdown-item" href="#">20</a>
                                                        <a class="dropdown-item" href="#">50</a>
                                                    </div>
                                                </div>
                                                <div class="ag-btns d-flex flex-wrap">
                                                    <input type="text"
                                                        class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0"
                                                        id="filter-text-box" placeholder="جستجو...">
                                                    <div class="action-btns">
                                                        <div class="btn-dropdown ">
                                                            <div class="btn-group dropdown actions-dropodown">
                                                                <button type="button"
                                                                    class="btn btn-white px-2 py-75 dropdown-toggle waves-effect waves-light"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"> اقدامات</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="feather icon-trash-2"></i> حذف</a>
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="feather icon-clipboard"></i>&nbsp;
                                                                        بایگانی </a>
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="feather icon-printer"></i>&nbsp; چاپ</a>
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="feather icon-download"></i>&nbsp; CSV</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ag Grid users list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
@endsection
