@extends('layouts.main')

@section('header')
<link rel="stylesheet" href="{{ asset('assets/backend/css/app-user.min.css') }}">

@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab"
                                        data-toggle="tab" href="#account" aria-controls="account" role="tab"
                                        aria-selected="true">
                                        <i class="feather icon-user mr-25"></i><span
                                        class="d-none d-sm-block">حساب</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"
                                    href="#information" aria-controls="information" role="tab"
                                    aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span
                                    class="d-none d-sm-block">اطلاعات</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab"
                                href="#social" aria-controls="social" role="tab" aria-selected="false">
                                <i class="feather icon-share-2 mr-25"></i><span
                                class="d-none d-sm-block">اجتماعی</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="setting-tab" data-toggle="tab"
                            href="#setting" aria-controls="setting" role="tab" aria-selected="false">
                            <i class="feather icon-settings mr-25"></i><span
                            class="d-none d-sm-block">تنظیمات</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <form novalidate="" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method("PATCH")
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img id="avatar-user" src="{{ $user->image ? $user->image->url : '/storage/images/avatar.png' }}"
                                                    alt="users avatar" class="users-avatar-shadow rounded" height="90"
                                                    width="90">
                                                    <input id="file-input" name="image" type="file" style="display: none" />
                                            </a>

                                            <div class="media-body mt-50">
                                                <h4 class="media-heading">{{ $user->meta->name }}</h4>
                                                @if ($user->image)
                                                <div class="col-12 d-flex mt-1 px-0">
                                                    <a href="#"
                                                    class="btn btn-primary d-block d-sm-none mr-75 waves-effect waves-light"><i
                                                    class="feather icon-edit-1"></i></a>

                                                    <a href="{{ route('user.delete_image',$user->id) }}"
                                                        class="btn btn-outline-danger d-none d-sm-block waves-effect waves-light">پاک
                                                        کردن</a>
                                                        <a href="#"
                                                        class="btn btn-outline-danger d-block d-sm-none waves-effect waves-light"><i
                                                        class="feather icon-trash-2"></i></a>
                                                    </div>
                                                    @endif
                                                </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->

                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>پست الکترونیک</label>
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ $user->email }}" placeholder="ایمیل"
                                                                value="angelo@sashington.com" required=""
                                                                data-validation-required-message="This email field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> نام خانوادگی</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $user->meta->name }}" placeholder="نام"
                                                                value="Angelo Sashington" required=""
                                                                data-validation-required-message="This name field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>جنسیت</label>
                                                            <select name="gender" class="form-control">
                                                                @foreach ($genders as $key => $gender)
                                                                <option value="{{ $gender == 'Male' ? 0 : 1 }}"
                                                                    {{ $user->meta ? ($key == $user->meta->gender ? 'selected' : '') : '' }}>
                                                                    {{ $gender }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">

                                                    <div class="form-group">
                                                        <label>آدرس</label>
                                                        <input type="text" name="address" value="{{ $user->meta->address ?: '' }}" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>سن</label>
                                                        <input type="text" name="year" value="{{ $user->meta->year ?: '' }}" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>شرکت</label>
                                                        <input type="text" class="form-control"
                                                            value="WinDon Technologies Pvt Ltd" placeholder="نام شرکت">
                                                    </div>
                                                </div>

                                                @role('admin')
                                                <div class="col-12">
                                                    <div class="table-responsive border rounded px-1 ">
                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i
                                                                class="feather icon-lock mr-50 "></i>نقش</h6>
                                                        <table class="table table-borderless">
                                                            <thead>

                                                                <tr>

                                                                    @foreach ($roles as $role)
                                                                    <th>{{ $role->name }} <input type="checkbox" name="roles" value="{{ $role->id }}" {{ $user->hasRole($role) ? 'checked' : '' }}></th>

                                                                    @endforeach
                                                                </tr>
                                                            </thead>

                                                        </table>
                                                    </div>
                                                </div>
                                                @endrole

                                                @role('admin')
                                                @if ($user->hasAnyRole($roles))
                                                <div class="col-12">
                                                    <div class="table-responsive border rounded px-1 ">
                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i
                                                                class="feather icon-lock mr-50 "></i>سطح دسترسی</h6>
                                                        <table class="table table-borderless">


                                                            <tbody>
                                                                @foreach ($user->roles as $role)
                                                                <tr>
                                                                    <td><strong>{{ $role->name }}</strong></td>

                                                                    @foreach($role->permissions as $permission)
                                                                    <td>

                                                                        <input type="checkbox" name="permissions" value="{{ $permission->id }}" {{ $user->hasAnyDirectPermission($permission->id) ? 'checked' : '' }}>
                                                                        {{-- <div class="custom-control custom-checkbox"><input
                                                                            type="checkbox" value="{{ $permission->id }}" id="{{ $permission->id }}"
                                                                            class="custom-control-input" name="permissions" {{ $user->hasPermissionTo($permission->id) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label"
                                                                            for="{{ $permission->id }}"></label>
                                                                        </div> --}}
                                                                        <span>{{ $permission->name }}</span>
                                                                    </td>
                                                                    @endforeach

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                @endif

                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="button" onclick="apply_roles_permissions({{ $user->id }})"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                        اعمال نقش</button>

                                                </div>
                                                @else
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                        ذخیره تغییرات</button>

                                                </div>
                                                @endrole

                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="tab-pane" id="information" aria-labelledby="information-tab"
                                        role="tabpanel">
                                        <!-- users edit Info form start -->
                                        <form novalidate="">
                                            <div class="row mt-1">
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1"><i class="feather icon-user mr-25"></i>اطلاعات شخصی
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>تاریخ تولد</label>
                                                                    <input type="text"
                                                                        class="form-control birthdate-picker picker__input"
                                                                        required="" placeholder="تاریخ تولد"
                                                                        data-validation-required-message="This birthdate field is required"
                                                                        readonly="" id="P912962318" aria-haspopup="true"
                                                                        aria-readonly="false" aria-owns="P912962318_root">
                                                                    <div class="picker" id="P912962318_root"
                                                                        aria-hidden="true">
                                                                        <div class="picker__holder" tabindex="-1">
                                                                            <div class="picker__frame">
                                                                                <div class="picker__wrap">
                                                                                    <div class="picker__box">
                                                                                        <div class="picker__header">
                                                                                            <div class="picker__month">April
                                                                                            </div>
                                                                                            <div class="picker__year">2021
                                                                                            </div>
                                                                                            <div class="picker__nav--prev"
                                                                                                data-nav="-1" tabindex="0"
                                                                                                role="button"
                                                                                                aria-controls="P912962318_table"
                                                                                                title="Previous month">
                                                                                            </div>
                                                                                            <div class="picker__nav--next"
                                                                                                data-nav="1" tabindex="0"
                                                                                                role="button"
                                                                                                aria-controls="P912962318_table"
                                                                                                title="Next month"> </div>
                                                                                        </div>
                                                                                        <table class="picker__table"
                                                                                            id="P912962318_table"
                                                                                            role="grid"
                                                                                            aria-controls="P912962318"
                                                                                            aria-readonly="true">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Sunday">Sun
                                                                                                    </th>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Monday">Mon
                                                                                                    </th>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Tuesday">Tue
                                                                                                    </th>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Wednesday">
                                                                                                        Wed</th>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Thursday">Thu
                                                                                                    </th>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Friday">Fri
                                                                                                    </th>
                                                                                                    <th class="picker__weekday"
                                                                                                        scope="col"
                                                                                                        title="Saturday">Sat
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1616873400000"
                                                                                                            id="P912962318_1616873400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="March, 28, 2021">
                                                                                                            28</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1616959800000"
                                                                                                            id="P912962318_1616959800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="March, 29, 2021">
                                                                                                            29</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1617046200000"
                                                                                                            id="P912962318_1617046200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="March, 30, 2021">
                                                                                                            30</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1617132600000"
                                                                                                            id="P912962318_1617132600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="March, 31, 2021">
                                                                                                            31</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617219000000"
                                                                                                            id="P912962318_1617219000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 1, 2021">
                                                                                                            1</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617305400000"
                                                                                                            id="P912962318_1617305400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 2, 2021">
                                                                                                            2</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617391800000"
                                                                                                            id="P912962318_1617391800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 3, 2021">
                                                                                                            3</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617478200000"
                                                                                                            id="P912962318_1617478200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 4, 2021">
                                                                                                            4</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617564600000"
                                                                                                            id="P912962318_1617564600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 5, 2021">
                                                                                                            5</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617651000000"
                                                                                                            id="P912962318_1617651000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 6, 2021">
                                                                                                            6</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617737400000"
                                                                                                            id="P912962318_1617737400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 7, 2021">
                                                                                                            7</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617823800000"
                                                                                                            id="P912962318_1617823800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 8, 2021">
                                                                                                            8</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617910200000"
                                                                                                            id="P912962318_1617910200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 9, 2021">
                                                                                                            9</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1617996600000"
                                                                                                            id="P912962318_1617996600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 10, 2021">
                                                                                                            10</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618083000000"
                                                                                                            id="P912962318_1618083000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 11, 2021">
                                                                                                            11</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618169400000"
                                                                                                            id="P912962318_1618169400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 12, 2021">
                                                                                                            12</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618255800000"
                                                                                                            id="P912962318_1618255800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 13, 2021">
                                                                                                            13</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618342200000"
                                                                                                            id="P912962318_1618342200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 14, 2021">
                                                                                                            14</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618428600000"
                                                                                                            id="P912962318_1618428600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 15, 2021">
                                                                                                            15</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618515000000"
                                                                                                            id="P912962318_1618515000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 16, 2021">
                                                                                                            16</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618601400000"
                                                                                                            id="P912962318_1618601400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 17, 2021">
                                                                                                            17</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618687800000"
                                                                                                            id="P912962318_1618687800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 18, 2021">
                                                                                                            18</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                                            data-pick="1618774200000"
                                                                                                            id="P912962318_1618774200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 19, 2021"
                                                                                                            aria-activedescendant="1618774200000">
                                                                                                            19</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618860600000"
                                                                                                            id="P912962318_1618860600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 20, 2021">
                                                                                                            20</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1618947000000"
                                                                                                            id="P912962318_1618947000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 21, 2021">
                                                                                                            21</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619033400000"
                                                                                                            id="P912962318_1619033400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 22, 2021">
                                                                                                            22</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619119800000"
                                                                                                            id="P912962318_1619119800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 23, 2021">
                                                                                                            23</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619206200000"
                                                                                                            id="P912962318_1619206200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 24, 2021">
                                                                                                            24</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619292600000"
                                                                                                            id="P912962318_1619292600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 25, 2021">
                                                                                                            25</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619379000000"
                                                                                                            id="P912962318_1619379000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 26, 2021">
                                                                                                            26</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619465400000"
                                                                                                            id="P912962318_1619465400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 27, 2021">
                                                                                                            27</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619551800000"
                                                                                                            id="P912962318_1619551800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 28, 2021">
                                                                                                            28</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619638200000"
                                                                                                            id="P912962318_1619638200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 29, 2021">
                                                                                                            29</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--infocus"
                                                                                                            data-pick="1619724600000"
                                                                                                            id="P912962318_1619724600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="April, 30, 2021">
                                                                                                            30</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1619811000000"
                                                                                                            id="P912962318_1619811000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 1, 2021">
                                                                                                            1</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1619897400000"
                                                                                                            id="P912962318_1619897400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 2, 2021">
                                                                                                            2</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1619983800000"
                                                                                                            id="P912962318_1619983800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 3, 2021">
                                                                                                            3</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1620070200000"
                                                                                                            id="P912962318_1620070200000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 4, 2021">
                                                                                                            4</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1620156600000"
                                                                                                            id="P912962318_1620156600000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 5, 2021">
                                                                                                            5</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1620243000000"
                                                                                                            id="P912962318_1620243000000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 6, 2021">
                                                                                                            6</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1620329400000"
                                                                                                            id="P912962318_1620329400000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 7, 2021">
                                                                                                            7</div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="picker__day picker__day--outfocus"
                                                                                                            data-pick="1620415800000"
                                                                                                            id="P912962318_1620415800000"
                                                                                                            tabindex="0"
                                                                                                            role="gridcell"
                                                                                                            aria-label="May, 8, 2021">
                                                                                                            8</div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <div class="picker__footer"><button
                                                                                                class="picker__button--today"
                                                                                                type="button"
                                                                                                data-pick="1618774200000"
                                                                                                disabled=""
                                                                                                aria-controls="P912962318">Today</button><button
                                                                                                class="picker__button--clear"
                                                                                                type="button" data-clear="1"
                                                                                                disabled=""
                                                                                                aria-controls="P912962318">Clear</button><button
                                                                                                class="picker__button--close"
                                                                                                type="button"
                                                                                                data-close="true"
                                                                                                disabled=""
                                                                                                aria-controls="P912962318">Close</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="help-block"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>تلفن همراه</label>
                                                            <input type="text" class="form-control" value="+6595895857"
                                                                placeholder="تلفن همراه اینجا..."
                                                                data-validation-required-message="This mobile number is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>سایت اینترنتی</label>
                                                            <input type="text" class="form-control" required=""
                                                                placeholder="آدرس وب سایت در اینجا..."
                                                                value="https://rowboat.com/insititious/Angelo"
                                                                data-validation-required-message="This Website field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>زبان ها</label>
                                                        <select class="form-control select2-hidden-accessible"
                                                            id="users-language-select2" multiple=""
                                                            data-select2-id="users-language-select2" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="English" selected="" data-select2-id="2">انگلیس
                                                            </option>
                                                            <option value="Spanish">اسپانیایی</option>
                                                            <option value="French">فرانسوی</option>
                                                            <option value="Russian">روسی</option>
                                                            <option value="German">آلمانی</option>
                                                            <option value="Arabic" selected="" data-select2-id="3">عربی
                                                            </option>
                                                            <option value="Sanskrit">سانسکریت</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--multiple"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-disabled="false">
                                                                    <ul class="select2-selection__rendered">
                                                                        <li class="select2-selection__choice" title="انگلیس"
                                                                            data-select2-id="4"><span
                                                                                class="select2-selection__choice__remove"
                                                                                role="presentation">×</span>انگلیس</li>
                                                                        <li class="select2-selection__choice" title="عربی"
                                                                            data-select2-id="5"><span
                                                                                class="select2-selection__choice__remove"
                                                                                role="presentation">×</span>عربی</li>
                                                                        <li class="select2-search select2-search--inline">
                                                                            <input class="select2-search__field"
                                                                                type="search" tabindex="0"
                                                                                autocomplete="off" autocorrect="off"
                                                                                autocapitalize="none" spellcheck="false"
                                                                                role="searchbox" aria-autocomplete="list"
                                                                                placeholder="" style="width: 0.75em;"></li>
                                                                    </ul>
                                                                </span></span><span class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>جنسیت</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" checked=""
                                                                            value="false">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span> مذکر
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" value="false">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span> موونث
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" value="false">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span> دیگر
                                                                    </div>
                                                                </fieldset>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>گزینه های تماس</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            checked="" name="customCheck1"
                                                                            id="customCheck1">
                                                                        <label class="custom-control-label"
                                                                            for="customCheck1">ایمیل</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            checked="" name="customCheck2"
                                                                            id="customCheck2">
                                                                        <label class="custom-control-label"
                                                                            for="customCheck2">پیام</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="customCheck3" id="customCheck3">
                                                                        <label class="custom-control-label"
                                                                            for="customCheck3">تلفن</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1 mt-2 mt-sm-0"><i
                                                            class="feather icon-map-pin mr-25"></i>نشانی</h5>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>خط شماره 1</label>
                                                            <input type="text" class="form-control"
                                                                value="A-65, Belvedere Streets" required=""
                                                                placeholder="خط شماره 1"
                                                                data-validation-required-message="This Address field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>آدرس خط 2</label>
                                                            <input type="text" class="form-control" required=""
                                                                placeholder="آدرس خط 2"
                                                                data-validation-required-message="This Address field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>کد پستی</label>
                                                            <input type="text" class="form-control" required=""
                                                                placeholder="کدپستی" value="1868"
                                                                data-validation-required-message="This Postcode field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>شهر</label>
                                                            <input type="text" class="form-control" required=""
                                                                value="New York"
                                                                data-validation-required-message="This Time Zone field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>دولت</label>
                                                            <input type="text" class="form-control" required=""
                                                                value="New York"
                                                                data-validation-required-message="This Time Zone field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>کشور</label>
                                                            <input type="text" class="form-control" required=""
                                                                value="United Kingdom"
                                                                data-validation-required-message="This Time Zone field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                        ذخیره تغییرات</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">تنظیم
                                                        مجدد</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit Info form ends -->
                                    </div>
                                    <div class="tab-pane" id="setting" aria-labelledby="setting-tab" role="tabpanel">
                                        <!-- users edit socail form start -->
                                        <form novalidate="" action="{{ route('user.update', $user->id) }}" method="POST">
                                            @csrf
                                            @method("PATCH")

                                        <!-- users edit account form start -->

                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>پست الکترونیک</label>
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ $user->email }}" placeholder="ایمیل"
                                                                required=""
                                                                data-validation-required-message="This email field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> رمزعبور</label>
                                                            <input type="text" class="form-control" name="password"
                                                                placeholder="رمزعبور"
                                                                required=""
                                                                data-validation-required-message="This name field is required">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>تکرار رمزعبور</label>
                                                            <input type="text" class="form-control" name="password_confirmation"
                                                             placeholder="تکرار رمزعبور"
                                                            required=""
                                                            data-validation-required-message="This name field is required">
                                                        <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <p>پس از ذخیره تغییرات به صورت خودکار از اکانت خارج میشوید!</p>
                                                    <button type="submit"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                        ذخیره تغییرات</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit socail form ends -->
                                    </div>
                                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                        <!-- users edit socail form start -->
                                        <form novalidate="">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">

                                                    <fieldset>
                                                        <label>توییتر</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-twitter"
                                                                    id="basic-addon3"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                value="https://www.twitter.com/adoptionism744"
                                                                placeholder="https://www.twitter.com/"
                                                                aria-describedby="basic-addon3">
                                                        </div>

                                                        <label>فیس بوک</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-facebook"
                                                                    id="basic-addon4"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                value="https://www.facebook.com/adoptionism664"
                                                                placeholder="https://www.facebook.com/"
                                                                aria-describedby="basic-addon4">
                                                        </div>
                                                        <label>اینستاگرام</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-instagram"
                                                                    id="basic-addon5"></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                value="https://www.instagram.com/adopt-ionism744"
                                                                placeholder="https://www.instagram.com/nparoco.co"
                                                                aria-describedby="basic-addon5">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label>گیت هاب</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-github"
                                                                id="basic-addon9"></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            value="https://www.github.com/madop818"
                                                            placeholder="https://www.nparoco.com"
                                                            aria-describedby="basic-addon9">
                                                    </div>
                                                    <label>کدپن</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-codepen"
                                                                id="basic-addon12"></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            value="https://www.codepen.com/adoptism243"
                                                            placeholder="https://www.nparoco.com"
                                                            aria-describedby="basic-addon12">
                                                    </div>
                                                    <label>اسلک</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-slack"
                                                                id="basic-addon11"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="@adoptionism744"
                                                            placeholder="https://www.nparoco.com"
                                                            aria-describedby="basic-addon11">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">
                                                        ذخیره تغییرات</button>
                                                    <button type="reset"
                                                        class="btn btn-outline-warning waves-effect waves-light">تنظیم
                                                        مجدد</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit socail form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
@endsection


@section('footer')
    <script>
        let index;
        let roleIds = [];
        let permissionIds = [];
        const roles = document.getElementsByName('roles');
        const permissions = document.getElementsByName('permissions');

        roles.forEach(role => {
            if(role.checked) {
                roleIds.push(role.value);
            }
        });
        permissions.forEach(permission => {
            if(permission.checked) {
                permissionIds.push(permission.value);
            }
        });



        $('#avatar-user').on('click',function() {
            document.getElementById('file-input').click();
        });

        $('input[name="roles"]').on('click',function() {
            if($(this).is(':checked'))
            {
                roleIds.push($(this).val())
            } else {
                index = roleIds.indexOf($(this).val());
                roleIds.splice(index,1);
            }
            console.log(roleIds);

        });

        $('input[name="permissions"]').on('click',function() {
            if($(this).is(':checked'))
            {
                permissionIds.push($(this).val());
            } else {
                index = permissionIds.indexOf($(this).val());
                permissionIds.splice(index,1);
            }
            console.log(permissionIds);
        });

        function apply_roles_permissions(id) {
            console.log(roleIds,permissionIds);
            $.ajax({
                type: 'post',
                url: `/user-list/${id}/role-permission-handler`,
                data: {roleIds,permissionIds},
                success:function(res) {
                    location.reload();
                },error:function(err) {
                    console.log(err);
                },
            });
        }


    </script>
@endsection
