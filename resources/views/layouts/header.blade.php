<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://www.rtl-theme.com/vuexy-Admin-Dashboard-Template
Renew Support: https://www.rtl-theme.com/vuexy-Admin-Dashboard-Template
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>تجزیه و تحلیل داشبورد - Vuexy - قالب مدیریتی نوین پردازش آروکو</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/toastr.css') }}">

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/shepherd-theme-default.css') }}"> --}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/toastr.min.css') }}">


    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/dashboard-analytics.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/card-analytics.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/tour.min.css') }}"> --}}


    <!-- END: Page CSS-->
    @yield('header')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/custom-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                                    data-toggle="tooltip" data-placement="top" title="لیست انجام کار"><i
                                        class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                                    data-toggle="tooltip" data-placement="top" title="گفتگو"><i
                                        class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                                    data-toggle="tooltip" data-placement="top" title="ایمیل"><i
                                        class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html"
                                    data-toggle="tooltip" data-placement="top" title="تقویم"><i
                                        class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                        class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="جستجو در Vuexy ..."
                                        tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>

                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{-- @lang('messages.success') --}}
                                <p>{{ session('success') }}</p>
                            </div>
                        @elseif(session()->has('error'))
                            <div class="alert alert-danger">
                                {{-- @lang('messages.error') --}}
                                <p>{{ session('error') }}</p>
                            </div>
                        @endif
                    </div>

                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-ir"></i><span
                                    class="selected-language">فارسی</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                                    href="{{ route('setLanguage', 'en') }}" data-language="en"><i
                                        class="flag-icon flag-icon-us"></i> انگلیسی</a><a class="dropdown-item"
                                    href="{{ route('setLanguage', 'fa') }}" data-language="fa"><i
                                        class="flag-icon flag-icon-ir"></i>فارسی</a><a class="dropdown-item"
                                    href="{{ route('setLanguage', 'fa') }}" data-language="fa"><i
                                        class="flag-icon flag-icon-ir"></i>{{ __('pages/index.main-page') }}</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="جستجو در Vuexy ..." tabindex="-1"
                                    data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">

                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 اعلان </h3><span class="notification-title">جدید
                                            برنامه</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between"
                                        href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">شما سفارش جدید دارید !</h6><small
                                                    class="notification-text">آیا قصد دارید امشب با من ملاقات
                                                    کنید؟</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 ساعت
                                                    پیش</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% ظرفیت سرور پر است
                                                </h6><small class="notification-text">شما سفارش جدیدی از کالاها را
                                                    دریافت کردید</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 ساعت
                                                    پیش</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">اعلان های هشدار</h6>
                                                <small class="notification-text">سرور 99% CPU را اشغال کرده</small>
                                            </div><small>
                                                <time class="media-meta"
                                                    datetime="2015-06-11T18:29:20+08:00">امروز</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">کار را تکمیل کنید</h6><small
                                                    class="notification-text">کاپ کیک کنجد</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">هفته
                                                    گذشته</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">تهیه گزارش ماهانه</h6><small
                                                    class="notification-text">لورم ایپسوم متن ساختگی با تولید
                                                    سادگی.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">ماه
                                                    اخیر</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                        href="javascript:void(0)">دیدن تمام اعلان ها</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">{{ auth()->user()->meta->name }}</span><span
                                        class="user-status">دردسترس</span></div><span><img class="round"
                                        src="{{ auth()->user()->image ? auth()->user()->image->url : '/storage/images/avatar.png' }}"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="{{ route('user.edit', auth()->user()->id) }}"><i
                                        class="feather icon-user"></i> پروفایل</a><a class="dropdown-item"
                                    href="page-user-profile.html"><i class="feather icon-user"></i> ویرایش نمایه</a><a
                                    class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> صندوق
                                    ورودی من</a><a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> برنامه ها</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> گفتگوها</a>
                                <div class="dropdown-divider"></div>
                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST">
                                    @csrf
                                    <a class="dropdown-item" href="javascript:{}"
                                        onclick="document.getElementById('logout-form').submit();""><i
                                        class=" feather icon-power"></i> خروج</a>

                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">فایل ها</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">دو مورد جدید ثبت شد</p><small class="text-muted">مدیر
                            فروش</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 فایل عکس تهیه شده است</p><small class="text-muted">توسعه
                            دهنده FrontEnd</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 فایل PDF بارگذاری شده است</p><small class="text-muted">مدیر
                            دیجیتال مارکتینگ</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">طراح وب
                            سایت</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">اعضا</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">{{ auth()->user()->meta->name }}</p><small
                            class="text-muted">طراح رابط
                            کاربری</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">مسعود اصغرزاده</p><small class="text-muted">توسعه دهنده
                            FrontEnd</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">محمد نوریان</p><small class="text-muted">مدیر دیجیتال
                            مارکتینگ</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">هانیه برخوردار</p><small class="text-muted">طراح وب
                            سایت</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>نتیجه ای پیدا نشد</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand"
                        href="../../../html/rtl/vertical-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title"
                            data-i18n="Dashboard">پیشخوان</span><span
                            class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="active"><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Analytics">آنالیزها</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="eCommerce">تجارت الکترونیک</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>اپلبکیشن ها</span>
                </li>
                <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title"
                            data-i18n="Email">ایمیل</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span
                            class="menu-title" data-i18n="Chat">گفتگو</span></a>
                </li>
                <li class=" nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span
                            class="menu-title" data-i18n="Todo">لیست انجام کار</span></a>
                </li>
                <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span
                            class="menu-title" data-i18n="Calender">تقویم</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                            data-i18n="Ecommerce">تجارت الکترونیک</span></a>
                    <ul class="menu-content">
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Shop">فروشگاه</span></a>
                        </li>
                        <li><a href="app-ecommerce-details.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Details">جزییات</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Wish List">لیست علاقه مندی</span></a>
                        </li>
                        <li><a href="app-ecommerce-checkout.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Checkout">بررسی</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="User">کاربر</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.usersList') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="List">لیست</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="User">سطح دسترسی</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('role.index') }}"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="List">لیست نقش ها</span></a>
                        </li>
                        <li><a href="{{ route('permission.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">لیست سطح دسترسی</span></a>
                </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>المان های رابط کاربری</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title"
                            data-i18n="Data List">لیست داده ها</span><span
                            class="badge badge badge-primary badge-pill float-right mr-2">جدید</span></a>
                    <ul class="menu-content">
                        <li><a href="data-list-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="List View">نمایش لیست</span></a>
                        </li>
                        <li><a href="data-thumb-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Thumb View">نمایش کوتاه</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title"
                            data-i18n="Content">محتوا</span></a>
                    <ul class="menu-content">
                        <li><a href="content-grid.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Grid">صفحه بندی</span></a>
                        </li>
                        <li><a href="content-typography.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Typography">تایپوگرافی</span></a>
                        </li>
                        <li><a href="content-text-utilities.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Text Utilities">برنامه های کاربردی متن</span></a>
                        </li>
                        <li><a href="content-syntax-highlighter.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Syntax Highlighter">Syntax تاکیدی</span></a>
                        </li>
                        <li><a href="content-helper-classes.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Helper Classes">کلاس های راهنما</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="colors.html"><i class="feather icon-droplet"></i><span class="menu-title"
                            data-i18n="Colors">رنگ ها</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-eye"></i><span class="menu-title"
                            data-i18n="Icons">آیکون ها</span></a>
                    <ul class="menu-content">
                        <li><a href="icons-feather.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Feather">Feather</span></a>
                        </li>
                        <li><a href="icons-font-awesome.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Font Awesome">Font Awesome</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title"
                            data-i18n="Card">کارت</span></a>
                    <ul class="menu-content">
                        <li><a href="card-basic.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Basic">مبتدی</span></a>
                        </li>
                        <li><a href="card-advance.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Advance">پیشرفته</span></a>
                        </li>
                        <li><a href="card-statistics.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Statistics">آماری</span></a>
                        </li>
                        <li><a href="card-analytics.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Analytics">آنالیزها</span></a>
                        </li>
                        <li><a href="card-actions.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Card Actions">کارت های عملگر</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-briefcase"></i><span class="menu-title"
                            data-i18n="Components">اجزا</span></a>
                    <ul class="menu-content">
                        <li><a href="component-alerts.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Alerts">اخطارها</span></a>
                        </li>
                        <li><a href="component-buttons-basic.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Buttons">دکمه ها</span></a>
                        </li>
                        <li><a href="component-breadcrumbs.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Breadcrumbs">مسیریابی ها</span></a>
                        </li>
                        <li><a href="component-carousel.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Carousel">چرخان</span></a>
                        </li>
                        <li><a href="component-collapse.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Collapse">ابزار جمع شونده</span></a>
                        </li>
                        <li><a href="component-dropdowns.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a href="component-list-group.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="List Group">لیست گروهی</span></a>
                        </li>
                        <li><a href="component-modals.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Modals">پنجره</span></a>
                        </li>
                        <li><a href="component-pagination.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Pagination">صفحه بندی</span></a>
                        </li>
                        <li><a href="component-navs-component.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Navs Component">اجزا نوار</span></a>
                        </li>
                        <li><a href="component-navbar.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Navbar">نوار</span></a>
                        </li>
                        <li><a href="component-tabs-component.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Tabs Component">اجزا تب ها</span></a>
                        </li>
                        <li><a href="component-pills-component.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Pills Component">اجزا تب 2</span></a>
                        </li>
                        <li><a href="component-tooltips.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Tooltips">نکات راهنما</span></a>
                        </li>
                        <li><a href="component-popovers.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Popovers">نکات راهنما 2</span></a>
                        </li>
                        <li><a href="component-badges.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Badges">نشان ها</span></a>
                        </li>
                        <li><a href="component-pill-badges.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Pill Badges">نشان ها 2</span></a>
                        </li>
                        <li><a href="component-progress.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Progress">بارگذارها</span></a>
                        </li>
                        <li><a href="component-media-objects.html"><i class="feather icon-circle"></i><span
                                    class="menu-item">اشیا رسانه</span></a>
                        </li>
                        <li><a href="component-spinner.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Spinner">بارگذاری</span></a>
                        </li>
                        <li><a href="component-bs-toast.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Toasts">پنجره اعلان</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title"
                            data-i18n="Extra Components">اجزا بیشتر</span></a>
                    <ul class="menu-content">
                        <li><a href="ex-component-avatar.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Avatar">عکس پروفایل</span></a>
                        </li>
                        <li><a href="ex-component-chips.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a href="ex-component-divider.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Divider">تقسیم کننده</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Forms &amp; Tables</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-copy"></i><span class="menu-title"
                            data-i18n="Form Elements">عناصر فرم</span></a>
                    <ul class="menu-content">
                        <li><a href="form-select.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Select">انتخاب کنید</span></a>
                        </li>
                        <li><a href="form-switch.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Switch">سوئیچ</span></a>
                        </li>
                        <li><a href="form-checkbox.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Checkbox">کادر انتخاب</span></a>
                        </li>
                        <li><a href="form-radio.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Radio">کادر انتخاب 2</span></a>
                        </li>
                        <li><a href="form-inputs.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Input">ورودی</span></a>
                        </li>
                        <li><a href="form-input-groups.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Input Groups">گروه های ورودی</span></a>
                        </li>
                        <li><a href="form-number-input.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Number Input">ورودی عدد</span></a>
                        </li>
                        <li><a href="form-textarea.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Textarea">ناحیه متن(textarea)</span></a>
                        </li>
                        <li><a href="form-date-time-picker.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Date &amp; Time Picker">Date &amp; Time
                                    Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="form-layout.html"><i class="feather icon-box"></i><span
                            class="menu-title" data-i18n="Form Layout">صفحه بندی فرم</span></a>
                </li>
                <li class=" nav-item"><a href="form-wizard.html"><i class="feather icon-package"></i><span
                            class="menu-title" data-i18n="Form Wizard">فرم ساز</span></a>
                </li>
                <li class=" nav-item"><a href="form-validation.html"><i class="feather icon-check-circle"></i><span
                            class="menu-title" data-i18n="Form Validation">فرم اعتبار سنجی </span></a>
                </li>
                <li class=" nav-item"><a href="table.html"><i class="feather icon-server"></i><span class="menu-title"
                            data-i18n="Table">جدول</span></a>
                </li>
                <li class=" nav-item"><a href="table-datatable.html"><i class="feather icon-grid"></i><span
                            class="menu-title" data-i18n="Datatable">جدول داده ها</span></a>
                </li>
                <li class=" nav-item"><a href="table-ag-grid.html"><i class="feather icon-grid"></i><span
                            class="menu-title" data-i18n="ag-grid">جدول agGrid</span><span
                            class="badge badge badge-primary badge-pill float-right mr-2">جدید</span></a>
                </li>
                <li class=" navigation-header"><span>صفحات</span>
                </li>
                <li class=" nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span
                            class="menu-title" data-i18n="Profile">نمایه</span></a>
                </li>
                <li class=" nav-item"><a href="page-account-settings.html"><i class="feather icon-settings"></i><span
                            class="menu-title" data-i18n="Account Settings">تنظیمات کاربری</span></a>
                </li>
                <li class=" nav-item"><a href="page-faq.html"><i class="feather icon-help-circle"></i><span
                            class="menu-title" data-i18n="FAQ">سؤالات متداول</span></a>
                </li>
                <li class=" nav-item"><a href="page-knowledge-base.html"><i class="feather icon-info"></i><span
                            class="menu-title" data-i18n="Knowledge Base">دانش محور</span></a>
                </li>
                <li class=" nav-item"><a href="page-search.html"><i class="feather icon-search"></i><span
                            class="menu-title" data-i18n="Search">جستجو</span></a>
                </li>
                <li class=" nav-item"><a href="page-invoice.html"><i class="feather icon-file"></i><span
                            class="menu-title" data-i18n="Invoice">فاکتور</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                            data-i18n="Starter kit">ابزار شروع</span></a>
                    <ul class="menu-content">
                        <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-2-columns.html"><i
                                    class="feather icon-circle"></i><span class="menu-item" data-i18n="2 columns">2
                                    ستون</span></a>
                        </li>
                        <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-fixed-navbar.html"><i
                                    class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Fixed navbar">نوار ثابت</span></a>
                        </li>
                        <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-floating-navbar.html"><i
                                    class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Floating navbar">ناوبری شناور</span></a>
                        </li>
                        <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-fixed.html"><i
                                    class="feather icon-circle"></i><span class="menu-item" data-i18n="Fixed layout">طرح
                                    ثابت</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title"
                            data-i18n="Authentication">احراز هویت</span></a>
                    <ul class="menu-content">
                        <li><a href="auth-login.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Login">ورود</span></a>
                        </li>
                        <li><a href="auth-register.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Register">ثبت نام</span></a>
                        </li>
                        <li><a href="auth-forgot-password.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Forgot Password">بازیابی گذرواژه</span></a>
                        </li>
                        <li><a href="auth-reset-password.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Reset Password">بازنشانی گذرواژه</span></a>
                        </li>
                        <li><a href="auth-lock-screen.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Lock Screen">صفحه قفل</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title"
                            data-i18n="Miscellaneous">متفرقه</span></a>
                    <ul class="menu-content">
                        <li><a href="page-coming-soon.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Coming Soon">به زودی</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Error">خطا</span></a>
                            <ul class="menu-content">
                                <li><a href="error-404.html"><i class="feather icon-circle"></i><span class="menu-item"
                                            data-i18n="404">404</span></a>
                                </li>
                                <li><a href="error-500.html"><i class="feather icon-circle"></i><span class="menu-item"
                                            data-i18n="500">500</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-not-authorized.html"><i class="feather icon-circle"></i><span
                                    class="menu-item" data-i18n="Not Authorized">مجاز نیست</span></a>
                        </li>
                        <li><a href="page-maintenance.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Maintenance">نگهداری</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title"
                            data-i18n="Charts">نمودار</span><span
                            class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a href="chart-apex.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a href="chart-chartjs.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                        <li><a href="chart-echarts.html"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Echarts">Echarts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="maps-google.html"><i class="feather icon-map"></i><span
                            class="menu-title" data-i18n="Google Maps">نقشه های Google</span></a>
                </li>
                <li class=" navigation-header"><span>برنامه های افزودنی</span>
                </li>
                <li class=" nav-item"><a href="ext-component-sweet-alerts.html"><i
                            class="feather icon-alert-circle"></i><span class="menu-title"
                            data-i18n="Sweet Alert">هشدار</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-toastr.html"><i class="feather icon-zap"></i><span
                            class="menu-title" data-i18n="Toastr">اعلان</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-noui-slider.html"><i class="feather icon-sliders"></i><span
                            class="menu-title" data-i18n="NoUi Slider">NoUi Slider</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-file-uploader.html"><i
                            class="feather icon-upload-cloud"></i><span class="menu-title"
                            data-i18n="File Uploader">آپلودکننده فایل</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-quill-editor.html"><i class="feather icon-edit"></i><span
                            class="menu-title" data-i18n="Quill Editor">ویرایشگر Quill</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="feather icon-droplet"></i><span
                            class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-tour.html"><i class="feather icon-info"></i><span
                            class="menu-title" data-i18n="Tour">راهنما</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-clipboard.html"><i class="feather icon-copy"></i><span
                            class="menu-title" data-i18n="Clipboard">کلیپ بورد</span></a>
                </li>
                <li class=" nav-item"><a href=" ext-component-plyr.html"><i class="feather icon-film"></i><span
                            class="menu-title" data-i18n="Media player">پخش کننده چند رسانه ای</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-context-menu.html"><i
                            class="feather icon-more-horizontal"></i><span class="menu-title"
                            data-i18n="Context Menu">منو(زمینه)</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-swiper.html"><i class="feather icon-smartphone"></i><span
                            class="menu-title" data-i18n="swiper">اسلاید</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-i18n.html"><i class="feather icon-globe"></i><span
                            class="menu-title" data-i18n="l18n">مترجم</span></a>
                </li>
                <li class=" navigation-header"><span>دیگر</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-menu"></i><span class="menu-title"
                            data-i18n="Menu Levels">منو چند سطحی</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Second Level">دو سطحی</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Second Level">دو سطحی</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                            data-i18n="Third Level">سه سطحی</span></a>
                                </li>
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                            data-i18n="Third Level">سه سطحی</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title"
                            data-i18n="Disabled Menu">منو غیر فعال</span></a>
                </li>
                <li class=" navigation-header"><span>پشتیبانی</span>
                </li>
                <li class=" nav-item"><a href="../../../documentation/documentation.html"><i
                            class="feather icon-folder"></i><span class="menu-title"
                            data-i18n="Documentation">مستندات</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i
                            class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">ایجاد
                            پشتیبانی</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
