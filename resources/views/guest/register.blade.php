@extends('layouts.main')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-6">

                <img class="background-login" src="{{ asset('assets/images/background-login.jpg') }}" alt="">


            <div class="card">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <a href="#"><h5>شرکتی</h5></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><h5>اصناف</h5></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><h5>شخصی</h5></a>
                    </div>
                </div>
                <br>
                <br>
                <br>

                <div class="card-body">
                    <h4 class="card-title">کار کیش چه کمکی بهت میکنه؟</h4>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> همین حالا در کار ثبت نام کن</p>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> رزومه ات رو برای آگهی های استخدام شرکتهای معتبر بفرست</p>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> جستجوی در آگهی های استخدام +3000 شرکت معتبر و ارساله رزومه با یک کلیک</p>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> رزومه ساز استاندارد</p>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> شناخت محیط کار و فرهنگ سازمانی شرکت های در حال استخدام</p>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> دریافت فرصت های شغلی جدید مرتبط از طریق ایمیل</p>
                    <p class="card-text"><img src="{{ asset('assets/images/checked.jfif') }}" alt=""> نوع فعالیت شرکت</p>
                </div>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
                <h1 class="text-center">ثبت نام کنید</h1>
                <br>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname-lname">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" placeholder="محمد محمدی">
                        </div>
                        <div class="col-md-6">
                            <label for="gender">جنسیت</label>
                            <select name="" id="" class="form-select">
                                <option value="">انتخاب کنید</option>
                                <option value="0">مرد</option>
                                <option value="1">زن</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">ایمیل</label>
                            <input type="text" class="form-control" placeholder="info@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label for="email-code">کد تایید</label>
                            <input type="text" class="form-control" placeholder="کد چهاررقمی ارسال شده">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="phone">شماره تلفن همراه</label>
                            <input type="text" class="form-control" placeholder="09*********">
                        </div>
                        <div class="col-md-6">
                            <label for="phone-code">کد تایید</label>
                            <input type="text" class="form-control" placeholder="کد چهاررقمی ارسال شده">
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="button" class="mx-auto">ارسال</button>

                        <p>02:00</p>
                    </div>
                </form>
          </div>
      </div>
  </div>

@endsection
