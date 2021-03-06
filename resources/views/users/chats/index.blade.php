
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
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>برنامه گفتگو - Vuexy - قالب مدیریتی نوین پردازش آروکو</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="../../../app-assets/images/fonts.googleapis.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/app-chat.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/custom-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern content-left-sidebar chat-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
              </ul>
              <ul class="nav navbar-nav bookmark-icons">
                <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                <!--     i.ficon.feather.icon-menu-->
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="لیست انجام کار"><i class="ficon feather icon-check-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="گفتگو"><i class="ficon feather icon-message-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="ایمیل"><i class="ficon feather icon-mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="تقویم"><i class="ficon feather icon-calendar"></i></a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                  <div class="bookmark-input search-input">
                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                    <input class="form-control input" type="text" placeholder="جستجو در Vuexy ..." tabindex="0" data-search="template-list">
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
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-ir"></i><span class="selected-language">فارسی</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="../../ltr/vertical-menu-template" data-language="en"><i class="flag-icon flag-icon-us"></i> انگلیسی</a><a class="dropdown-item" href="#" data-language="fa"><i class="flag-icon flag-icon-ir"></i>فارسی</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i>آلمان</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i>پرتغال</a></div>
              </li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                <div class="search-input">
                  <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                  <input class="input" type="text" placeholder="جستجو در Vuexy ..." tabindex="-1" data-search="template-list">
                  <div class="search-input-close"><i class="feather icon-x"></i></div>
                  <ul class="search-list search-list-main"></ul>
                </div>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header m-0 p-2">
                      <h3 class="white">5 اعلان </h3><span class="notification-title">جدید برنامه</span>
                    </div>
                  </li>
                  <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                        <div class="media-body">
                          <h6 class="primary media-heading">شما سفارش جدید دارید !</h6><small class="notification-text">آیا قصد دارید امشب با من ملاقات کنید؟</small>
                        </div><small>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 ساعت پیش</time></small>
                      </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                        <div class="media-body">
                          <h6 class="success media-heading red darken-1">99% ظرفیت سرور پر است</h6><small class="notification-text">شما سفارش جدیدی از کالاها را دریافت کردید</small>
                        </div><small>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 ساعت پیش</time></small>
                      </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                        <div class="media-body">
                          <h6 class="danger media-heading yellow darken-3">اعلان های هشدار</h6><small class="notification-text">سرور 99% CPU را اشغال کرده</small>
                        </div><small>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">امروز</time></small>
                      </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                        <div class="media-body">
                          <h6 class="info media-heading">کار را تکمیل کنید</h6><small class="notification-text">کاپ کیک کنجد</small>
                        </div><small>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">هفته گذشته</time></small>
                      </div></a><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                        <div class="media-body">
                          <h6 class="warning media-heading">تهیه گزارش ماهانه</h6><small class="notification-text">لورم ایپسوم متن ساختگی با تولید سادگی.</small>
                        </div><small>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">ماه اخیر</time></small>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">دیدن تمام اعلان ها</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">جواد محمدی</span><span class="user-status">دردسترس</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> ویرایش نمایه</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> صندوق ورودی من</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> برنامه ها</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> گفتگوها</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i class="feather icon-power"></i> خروج</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
      <li class="d-flex align-items-center"><a class="pb-25" href="#">
          <h6 class="text-primary mb-0">فایل ها</h6></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">دو مورد جدید ثبت شد</p><small class="text-muted">مدیر فروش</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">52 فایل عکس تهیه شده است</p><small class="text-muted">توسعه دهنده FrontEnd</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">25 فایل PDF بارگذاری شده است</p><small class="text-muted">مدیر دیجیتال مارکتینگ</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">طراح وب سایت</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small></a></li>
      <li class="d-flex align-items-center"><a class="pb-25" href="#">
          <h6 class="text-primary mb-0">اعضا</h6></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">جواد محمدی</p><small class="text-muted">طراح رابط کاربری</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">مسعود اصغرزاده</p><small class="text-muted">توسعه دهنده FrontEnd</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">محمد نوریان</p><small class="text-muted">مدیر دیجیتال مارکتینگ</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">هانیه برخوردار</p><small class="text-muted">طراح وب سایت</small>
            </div>
          </div></a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>نتیجه ای پیدا نشد</span></div></a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/rtl/vertical-menu-template/index.html">
              <div class="brand-logo"></div>
              <h2 class="brand-text mb-0">Vuexy</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">پیشخوان</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
            <ul class="menu-content">
              <li><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">آنالیزها</span></a>
              </li>
              <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">تجارت الکترونیک</span></a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>اپلبکیشن ها</span>
          </li>
          <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">ایمیل</span></a>
          </li>
          <li class="active nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">گفتگو</span></a>
          </li>
          <li class=" nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">لیست انجام کار</span></a>
          </li>
          <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">تقویم</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">تجارت الکترونیک</span></a>
            <ul class="menu-content">
              <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">فروشگاه</span></a>
              </li>
              <li><a href="app-ecommerce-details.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">جزییات</span></a>
              </li>
              <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">لیست علاقه مندی</span></a>
              </li>
              <li><a href="app-ecommerce-checkout.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">بررسی</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">کاربر</span></a>
            <ul class="menu-content">
              <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">لیست</span></a>
              </li>
              <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">نمایش</span></a>
              </li>
              <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">ویرایش</span></a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>المان های رابط کاربری</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">لیست داده ها</span><span class="badge badge badge-primary badge-pill float-right mr-2">جدید</span></a>
            <ul class="menu-content">
              <li><a href="data-list-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">نمایش لیست</span></a>
              </li>
              <li><a href="data-thumb-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Thumb View">نمایش کوتاه</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Content">محتوا</span></a>
            <ul class="menu-content">
              <li><a href="content-grid.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Grid">صفحه بندی</span></a>
              </li>
              <li><a href="content-typography.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Typography">تایپوگرافی</span></a>
              </li>
              <li><a href="content-text-utilities.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Text Utilities">برنامه های کاربردی متن</span></a>
              </li>
              <li><a href="content-syntax-highlighter.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Syntax Highlighter">Syntax تاکیدی</span></a>
              </li>
              <li><a href="content-helper-classes.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Helper Classes">کلاس های راهنما</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="colors.html"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">رنگ ها</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-eye"></i><span class="menu-title" data-i18n="Icons">آیکون ها</span></a>
            <ul class="menu-content">
              <li><a href="icons-feather.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Feather">Feather</span></a>
              </li>
              <li><a href="icons-font-awesome.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Font Awesome">Font Awesome</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">کارت</span></a>
            <ul class="menu-content">
              <li><a href="card-basic.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">مبتدی</span></a>
              </li>
              <li><a href="card-advance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Advance">پیشرفته</span></a>
              </li>
              <li><a href="card-statistics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Statistics">آماری</span></a>
              </li>
              <li><a href="card-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">آنالیزها</span></a>
              </li>
              <li><a href="card-actions.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Card Actions">کارت های عملگر</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-briefcase"></i><span class="menu-title" data-i18n="Components">اجزا</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Alerts">اخطارها</span></a>
              </li>
              <li><a href="component-buttons-basic.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Buttons">دکمه ها</span></a>
              </li>
              <li><a href="component-breadcrumbs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Breadcrumbs">مسیریابی ها</span></a>
              </li>
              <li><a href="component-carousel.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Carousel">چرخان</span></a>
              </li>
              <li><a href="component-collapse.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Collapse">ابزار جمع شونده</span></a>
              </li>
              <li><a href="component-dropdowns.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
              </li>
              <li><a href="component-list-group.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List Group">لیست گروهی</span></a>
              </li>
              <li><a href="component-modals.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Modals">پنجره</span></a>
              </li>
              <li><a href="component-pagination.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Pagination">صفحه بندی</span></a>
              </li>
              <li><a href="component-navs-component.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Navs Component">اجزا نوار</span></a>
              </li>
              <li><a href="component-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Navbar">نوار</span></a>
              </li>
              <li><a href="component-tabs-component.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Tabs Component">اجزا تب ها</span></a>
              </li>
              <li><a href="component-pills-component.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Pills Component">اجزا تب 2</span></a>
              </li>
              <li><a href="component-tooltips.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Tooltips">نکات راهنما</span></a>
              </li>
              <li><a href="component-popovers.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Popovers">نکات راهنما 2</span></a>
              </li>
              <li><a href="component-badges.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Badges">نشان ها</span></a>
              </li>
              <li><a href="component-pill-badges.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Pill Badges">نشان ها 2</span></a>
              </li>
              <li><a href="component-progress.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Progress">بارگذارها</span></a>
              </li>
              <li><a href="component-media-objects.html"><i class="feather icon-circle"></i><span class="menu-item">اشیا رسانه</span></a>
              </li>
              <li><a href="component-spinner.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Spinner">بارگذاری</span></a>
              </li>
              <li><a href="component-bs-toast.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Toasts">پنجره اعلان</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Extra Components">اجزا بیشتر</span></a>
            <ul class="menu-content">
              <li><a href="ex-component-avatar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Avatar">عکس پروفایل</span></a>
              </li>
              <li><a href="ex-component-chips.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chips">Chips</span></a>
              </li>
              <li><a href="ex-component-divider.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Divider">تقسیم کننده</span></a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>Forms &amp; Tables</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-copy"></i><span class="menu-title" data-i18n="Form Elements">عناصر فرم</span></a>
            <ul class="menu-content">
              <li><a href="form-select.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Select">انتخاب کنید</span></a>
              </li>
              <li><a href="form-switch.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Switch">سوئیچ</span></a>
              </li>
              <li><a href="form-checkbox.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkbox">کادر انتخاب</span></a>
              </li>
              <li><a href="form-radio.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Radio">کادر انتخاب 2</span></a>
              </li>
              <li><a href="form-inputs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Input">ورودی</span></a>
              </li>
              <li><a href="form-input-groups.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Input Groups">گروه های ورودی</span></a>
              </li>
              <li><a href="form-number-input.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Number Input">ورودی عدد</span></a>
              </li>
              <li><a href="form-textarea.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Textarea">ناحیه متن(textarea)</span></a>
              </li>
              <li><a href="form-date-time-picker.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="form-layout.html"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Form Layout">صفحه بندی فرم</span></a>
          </li>
          <li class=" nav-item"><a href="form-wizard.html"><i class="feather icon-package"></i><span class="menu-title" data-i18n="Form Wizard">فرم ساز</span></a>
          </li>
          <li class=" nav-item"><a href="form-validation.html"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Form Validation">فرم اعتبار سنجی </span></a>
          </li>
          <li class=" nav-item"><a href="table.html"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Table">جدول</span></a>
          </li>
          <li class=" nav-item"><a href="table-datatable.html"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Datatable">جدول داده ها</span></a>
          </li>
          <li class=" nav-item"><a href="table-ag-grid.html"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="ag-grid">جدول agGrid</span><span class="badge badge badge-primary badge-pill float-right mr-2">جدید</span></a>
          </li>
          <li class=" navigation-header"><span>صفحات</span>
          </li>
          <li class=" nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">نمایه</span></a>
          </li>
          <li class=" nav-item"><a href="page-account-settings.html"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">تنظیمات کاربری</span></a>
          </li>
          <li class=" nav-item"><a href="page-faq.html"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">سؤالات متداول</span></a>
          </li>
          <li class=" nav-item"><a href="page-knowledge-base.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">دانش محور</span></a>
          </li>
          <li class=" nav-item"><a href="page-search.html"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">جستجو</span></a>
          </li>
          <li class=" nav-item"><a href="page-invoice.html"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">فاکتور</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">ابزار شروع</span></a>
            <ul class="menu-content">
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-2-columns.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="2 columns">2 ستون</span></a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-fixed-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Fixed navbar">نوار ثابت</span></a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-floating-navbar.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Floating navbar">ناوبری شناور</span></a>
              </li>
              <li><a href="../../../starter-kit/rtl/vertical-menu-template/sk-layout-fixed.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Fixed layout">طرح ثابت</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">احراز هویت</span></a>
            <ul class="menu-content">
              <li><a href="auth-login.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">ورود</span></a>
              </li>
              <li><a href="auth-register.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">ثبت نام</span></a>
              </li>
              <li><a href="auth-forgot-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Forgot Password">بازیابی گذرواژه</span></a>
              </li>
              <li><a href="auth-reset-password.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Reset Password">بازنشانی گذرواژه</span></a>
              </li>
              <li><a href="auth-lock-screen.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Lock Screen">صفحه قفل</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Miscellaneous">متفرقه</span></a>
            <ul class="menu-content">
              <li><a href="page-coming-soon.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Coming Soon">به زودی</span></a>
              </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Error">خطا</span></a>
                <ul class="menu-content">
                  <li><a href="error-404.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="404">404</span></a>
                  </li>
                  <li><a href="error-500.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="500">500</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="page-not-authorized.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Not Authorized">مجاز نیست</span></a>
              </li>
              <li><a href="page-maintenance.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Maintenance">نگهداری</span></a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span>Charts &amp; Maps</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">نمودار</span><span class="badge badge badge-pill badge-success float-right mr-2">3</span></a>
            <ul class="menu-content">
              <li><a href="chart-apex.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
              </li>
              <li><a href="chart-chartjs.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
              </li>
              <li><a href="chart-echarts.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Echarts">Echarts</span></a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="maps-google.html"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">نقشه های Google</span></a>
          </li>
          <li class=" navigation-header"><span>برنامه های افزودنی</span>
          </li>
          <li class=" nav-item"><a href="ext-component-sweet-alerts.html"><i class="feather icon-alert-circle"></i><span class="menu-title" data-i18n="Sweet Alert">هشدار</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-toastr.html"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Toastr">اعلان</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-noui-slider.html"><i class="feather icon-sliders"></i><span class="menu-title" data-i18n="NoUi Slider">NoUi Slider</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-file-uploader.html"><i class="feather icon-upload-cloud"></i><span class="menu-title" data-i18n="File Uploader">آپلودکننده فایل</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-quill-editor.html"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Quill Editor">ویرایشگر Quill</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-tour.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Tour">راهنما</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-clipboard.html"><i class="feather icon-copy"></i><span class="menu-title" data-i18n="Clipboard">کلیپ بورد</span></a>
          </li>
          <li class=" nav-item"><a href=" ext-component-plyr.html"><i class="feather icon-film"></i><span class="menu-title" data-i18n="Media player">پخش کننده چند رسانه ای</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-context-menu.html"><i class="feather icon-more-horizontal"></i><span class="menu-title" data-i18n="Context Menu">منو(زمینه)</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-swiper.html"><i class="feather icon-smartphone"></i><span class="menu-title" data-i18n="swiper">اسلاید</span></a>
          </li>
          <li class=" nav-item"><a href="ext-component-i18n.html"><i class="feather icon-globe"></i><span class="menu-title" data-i18n="l18n">مترجم</span></a>
          </li>
          <li class=" navigation-header"><span>دیگر</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Menu Levels">منو چند سطحی</span></a>
            <ul class="menu-content">
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">دو سطحی</span></a>
              </li>
              <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">دو سطحی</span></a>
                <ul class="menu-content">
                  <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">سه سطحی</span></a>
                  </li>
                  <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">سه سطحی</span></a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">منو غیر فعال</span></a>
          </li>
          <li class=" navigation-header"><span>پشتیبانی</span>
          </li>
          <li class=" nav-item"><a href="../../../documentation/documentation.html"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">مستندات</span></a>
          </li>
          <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">ایجاد پشتیبانی</span></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-area-wrapper">
        <div class="sidebar-left">
          <div class="sidebar"><!-- User Chat profile area -->
<div class="chat-profile-sidebar">
  <header class="chat-profile-header">
    <span class="close-icon">
      <i class="feather icon-x"></i>
    </span>
    <div class="header-profile-sidebar">
      <div class="avatar">
        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="user_avatar" height="70" width="70">
        <span class="avatar-status-online avatar-status-lg"></span>
      </div>
      <h4 class="chat-user-name">جواد محمدی</h4>
    </div>
  </header>
  <div class="profile-sidebar-area">
    <div class="scroll-area">
      <h6>درباره</h6>
      <div class="about-user">
        <fieldset class="mb-0">
            <textarea data-length="120" class="form-control char-textarea" id="textarea-counter" rows="5" placeholder="درباره کاربر">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</textarea>
        </fieldset>
        <small class="counter-value float-right"><span class="char-count">108</span> / 120 </small>
      </div>
      <h6 class="mt-3">وضعیت</h6>
      <ul class="list-unstyled user-status mb-0">
        <li class="pb-50">
          <fieldset>
            <div class="vs-radio-con vs-radio-success">
              <input type="radio" name="userStatus" value="online" checked="checked">
              <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
              <span class="">فعال</span>
            </div>
          </fieldset>
        </li>
        <li class="pb-50">
          <fieldset>
            <div class="vs-radio-con vs-radio-danger">
              <input type="radio" name="userStatus" value="busy">
              <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
              <span class="">مزاحم نشوید</span>
            </div>
          </fieldset>
        </li>
        <li class="pb-50">
          <fieldset>
            <div class="vs-radio-con vs-radio-warning">
              <input type="radio" name="userStatus" value="away">
              <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
              <span class="">دور</span>
            </div>
          </fieldset>
        </li>
        <li class="pb-50">
          <fieldset>
            <div class="vs-radio-con vs-radio-secondary">
              <input type="radio" name="userStatus" value="offline">
              <span class="vs-radio">
                <span class="vs-radio--border"></span>
                <span class="vs-radio--circle"></span>
              </span>
              <span class="">آفلاین</span>
            </div>
          </fieldset>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--/ User Chat profile area -->
<!-- Chat Sidebar area -->
<div class="sidebar-content card">
    <span class="sidebar-close-icon">
      <i class="feather icon-x"></i>
    </span>
    <div class="chat-fixed-search">
        <div class="d-flex align-items-center">
          <div class="sidebar-profile-toggle position-relative d-inline-flex">
            <div class="avatar">
              <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="user_avatar" height="40" width="40">
              <span class="avatar-status-online"></span>
            </div>
            <div class="bullet-success bullet-sm position-absolute"></div>
          </div>
          <fieldset class="form-group position-relative has-icon-left mx-1 my-0 w-100">
              <input type="text" class="form-control round" id="chat-search" placeholder="جستجو کنید یا یک چت جدید را آغاز کنید">
              <div class="form-control-position">
                  <i class="feather icon-search"></i>
              </div>
          </fieldset>
        </div>
    </div>
    <div id="users-list" class="chat-user-list list-group position-relative">
        <h3 class="primary p-1 mb-0">گفتگو</h3>
        <ul class="chat-users-list-wrapper media-list">
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">حمید اعزازی</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25">4:14 بعد از ظهر</span>
                  <span class="badge badge-primary badge-pill float-right">3</span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">محمد جواد آشوری</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25">9:09 قبل از ظهر</span>
                </div>
              </div>
          </li>
        </ul>
        <h3 class="primary p-1 mb-0">مخاطب</h3>
        <ul class="chat-users-list-wrapper media-list">
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">سارا بختیاری</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">یاشار بهرامی</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">هانیه برخوردار</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">حمید عسگری</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">کامران هاشمی</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">ونوس همتی</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">حمید اعزازی</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
          <li>
              <div class="pr-1">
                  <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                  <i></i>
                  </span>
              </div>
              <div class="user-chat-info">
                <div class="contact-info">
                  <h5 class="font-weight-bold mb-0">محمد جواد آشوری</h5>
                  <p class="truncate">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="contact-meta">
                  <span class="float-right mb-25"></span>
                </div>
              </div>
          </li>
        </ul>
    </div>
</div>
<!--/ Chat Sidebar area -->

          </div>
        </div>
        <div class="content-right">
          <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><div class="chat-overlay"></div>
<section class="chat-app-window">
  <div class="start-chat-area">
      <span class="mb-1 start-chat-icon feather icon-message-square"></span>
      <h4 class="py-50 px-1 sidebar-toggle start-chat-text">شروع گفتگو</h4>
  </div>
  <div class="active-chat d-none">
    <div class="chat_navbar">
      <header class="chat_header d-flex justify-content-between align-items-center p-1">
        <div class="vs-con-items d-flex align-items-center">
          <div class="sidebar-toggle d-block d-lg-none mr-1"><i class="feather icon-menu font-large-1"></i></div>
          <div class="avatar user-profile-toggle m-0 m-0 mr-1">
            <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="" height="40" width="40" />
            <span class="avatar-status-busy"></span>
          </div>
          <h6 class="mb-0">محمد نوری</h6>
        </div>
        <span class="favorite"><i class="feather icon-star font-medium-5"></i></span>
      </header>
    </div>
    <div class="user-chats">
        <div class="chats">
          <div class="chat">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>چطور میتوان کمکتون کنم</p>
              </div>
            </div>
          </div>
          <div class="chat chat-left">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>سلام من دنبال یه قالب خوب هستم</p>
                <p>آیا می توانید لطفا به من کمک کنید تا پیداش کنم؟</p>
              </div>
              <div class="chat-content">
                <p>این با Bootstrap 4 سازگار است</p>
              </div>
            </div>
          </div>
          <div class="divider">
            <div class="divider-text">دیروز</div>
          </div>
          <div class="chat">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>کاملا!</p>
              </div>
              <div class="chat-content">
                <p>ادمین vuexy یه قالب واکنشگرا با تکنولوژی bootstrap 4 است</p>
              </div>
            </div>
          </div>
          <div class="chat chat-left">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>بنظر رابط کاربری خوبی داره.</p>
              </div>
              <div class="chat-content">
                <p>این برای پروژه بعدی من عالیه.</p>
              </div>
              <div class="chat-content">
                <p>چجوری می توانم خریداری کنم؟</p>
              </div>
            </div>
          </div>
          <div class="chat">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>ممنون از نوین پردازش آروکو.</p>
              </div>
            </div>
          </div>
          <div class="chat chat-left">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>من آن را با اطمینان خریداری می کنم.</p>
              </div>
              <div class="chat-content">
                <p>ممنون.</p>
              </div>
            </div>
          </div>
          <div class="chat">
            <div class="chat-avatar">
              <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40"/>
              </a>
            </div>
            <div class="chat-body">
              <div class="chat-content">
                <p>عالیه، با کلیک کردن آزادی را احساس کنید</p>
              </div>
              <div class="chat-content">
                <p>https://www.nparoco.com/</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="chat-app-form">
      <form class="chat-app-input d-flex" onsubmit="enter_chat();" action="javascript:void(0);">
        <input type="text" class="form-control message mr-1 ml-50" id="iconLeft4-1" placeholder="پیام خود را تایپ کنید">
        <button type="button" class="btn btn-primary send" onclick="enter_chat();"><i class="fa fa-paper-plane-o d-lg-none"></i> <span class="d-none d-lg-block">ارسال</span></button>
      </form>
    </div>
  </div>
</section>
<!-- User Chat profile right area -->
<div class="user-profile-sidebar">
  <header class="user-profile-header">
    <span class="close-icon">
      <i class="feather icon-x"></i>
    </span>
    <div class="header-profile-sidebar">
      <div class="avatar">
        <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="user_avatar" height="70" width="70">
        <span class="avatar-status-busy avatar-status-lg"></span>
      </div>
      <h4 class="chat-user-name">محمد نوری</h4>
    </div>
  </header>
  <div class="user-profile-sidebar-area p-2">
    <h6>درباره</h6>
    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
  </div>
</div>
<!--/ User Chat profile right area -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="feather icon-x"></i></a><a class="customizer-toggle" href="#"><i class="feather icon-settings fa fa-spin fa-fw white"></i></a><div class="customizer-content p-2">
  <h4 class="text-uppercase mb-0">تنظیم کننده تم</h4>
  <small>سفارشی سازی کنید و در لحظه پیش نمایش را ببینید</small>
  <hr>
  <!-- Menu Colors Starts -->
  <div id="customizer-theme-colors">
    <h5>رنگ های منو</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-primary selected" data-color="theme-primary"></li>
      <li class="color-box bg-success" data-color="theme-success"></li>
      <li class="color-box bg-danger" data-color="theme-danger"></li>
      <li class="color-box bg-info" data-color="theme-info"></li>
      <li class="color-box bg-warning" data-color="theme-warning"></li>
      <li class="color-box bg-dark" data-color="theme-dark"></li>
    </ul>
  </div>
  <!-- Menu Colors Ends -->
  <hr>
  <!-- Theme options starts -->
  <h5 class="mt-1">تم صفحه</h5>
  <div class="theme-layouts">
    <div class="d-flex justify-content-start">
      <div class="mx-50 lidht">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="" checked>
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">روشن</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50 dark">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="dark-layout">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">تاریک</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50 semi-dark">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="semi-dark-layout">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">نیمه روشن</span>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
  <!-- Theme options starts -->
  <hr>

  <!-- Collapse sidebar switch starts -->
  <div class="collapse-sidebar d-flex justify-content-between">
    <div class="collapse-option-title">
      <h5 class="pt-25 collapse_sidebar">نوار کناری</h5>
      <h5 class="pt-25 collapse_menu d-none">منو Collapse</h5>
    </div>
    <div class="collapse-option-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <!-- Collapse sidebar switch Ends -->
  <hr>

  <!-- Navbar colors starts -->
  <div id="customizer-navbar-colors">
    <h5>رنگ های نوار</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-white border selected" data-navbar-default=""></li>
      <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
      <li class="color-box bg-success" data-navbar-color="bg-success"></li>
      <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
      <li class="color-box bg-info" data-navbar-color="bg-info"></li>
      <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
      <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
    </ul>
    <hr>
  </div>
  <!-- Navbar colors starts -->
  <!-- Navbar Type Starts -->
  <div id="navbar-type">
    <h5 class="navbar_type">وضعیت نوار</h5>
    <h5 class="menu_type d-none">وضعیت منو</h5>
    <div class="navbar-type d-flex justify-content-start">
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">مخفی</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-static">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">ایستا</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-sticky">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">چسبیده</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-floating" checked>
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">شناور</span>
          </div>
        </fieldset>
      </div>
    </div>
    <hr>
  </div>
  <!-- Navbar Type Starts -->

  <!-- Footer Type Starts -->
  <h5>وضعیت پاورقی</h5>
  <div class="footer-type d-flex justify-content-start">
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="footerType" value="false" id="footer-hidden">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">مخفی</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="footerType" value="false" id="footer-static" checked>
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">ایستا</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="footerType" value="false" id="footer-sticky">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">چسبیده</span>
        </div>
      </fieldset>
    </div>
  </div>
  <!-- Footer Type Ends -->
  <hr>

  <!-- Hide Scroll To Top Starts-->
  <div class="hide-scroll-to-top d-flex justify-content-between py-25">
    <div class="hide-scroll-title">
      <h5 class="pt-25">پیمایش به بالا</h5>
    </div>
    <div class="hide-scroll-top-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
      </div>
    </div>
  </div>
  <!-- Hide Scroll To Top Ends-->
</div>

    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://www.rtl-theme.com/vuexy-Admin-Dashboard-Template" target="_blank" class="btn btn-danger">خرید سریع</a>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">حقوق کپی رایت &copy; 1399<a class="text-bold-800 grey darken-2" href="https://www.nparoco.com" target="_blank">نوین پردازش آروکو</a>کلیه حقوق محفوظ است</span><span class="float-md-right d-none d-md-block">دست ساز و ساخته شده با<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/backend/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/backend/js/app-menu.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/components.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/customizer.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/footer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/backend/js/app-chat.min.js') }}"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>
