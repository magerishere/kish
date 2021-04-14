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
                <h1 class="text-center">وارد شوید</h1>
                <br>
                <form action="">
                    <div class="mb-3">
                        <label for="fname-lname">شماره موبایل خود را وارد کنید</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="*********09">
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" name="" id="checked">
                        <label for="checked"><a href="#"> قوانین </a>را خوانده و قبول دارم</label>

                    </div>
                    <div class="text-center">
                        <button type="button" class="mx-auto">ارسال</button>

                    </div>
                </form>
          </div>
      </div>
  </div>

@endsection
