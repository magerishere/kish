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
          <div class="col-md-5" id="changeForm">
                <h1 class="text-center">وارد شوید</h1>
                <br>
                <form id="myForm" action="{{ route('sendSms') }}" method="POST">
                    <div class="mb-3">
                        <label for="fname-lname">شماره موبایل خود را وارد کنید</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="*********09">
                    </div>
                    <div id="code" class="mb-3"></div>
                    <div class="mb-3">
                        <input type="checkbox" name="" id="checked">
                        <label for="checked"><a href="#"> قوانین </a>را خوانده و قبول دارم</label>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="mx-auto">ارسال</button>

                    </div>
                </form>
          </div>
      </div>
  </div>

@endsection


@section('footer')
    <script>
        let phone_number;

          $('#myForm').on('submit',function(e) {
            e.preventDefault();
            phone_number = document.getElementById('phone_number');
            const code = document.getElementById('code');
            const change_form = document.getElementById('changeForm');
            $.ajax({
                type: 'post',
                url: '/sms',
                data: {phone_number:phone_number.value},
                success:function(res) {
                
                    if(res.has_number == 1) {
                    code.innerHTML = ` <label for="">Enter your verification code</label>
                    <input type="text" placeholder="Enter your code">`;
                    phone_number.disabled = true;

                    } else if (res.has_number == 0) {
                        change_form.innerHTML = `    <h1 class="text-center">ثبت نام کنید</h1>
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
                            <input type="text" value="${phone_number.value}" id="phone_number"  disabled class="form-control" placeholder="09*********">
                            <i onclick="editPhoneNumberHandler()" id="edit-icon" class="fa fa-pencil" aria-hidden="true">ویرایش</i>
                        </div>
                        <div class="col-md-6">
                            <label for="phone-code">کد تایید</label>
                            <input type="text" class="form-control" placeholder="کد چهاررقمی ارسال شده">
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="button" class="mx-auto">ارسال</button>

                        <p id="time">02:00 <span><button type="button" onlick="resendSms()" class="btn btn-primary">ارسال مجدد کد</button></span></p>
                    </div>
                </form>`;
                    }
                    var fiveMinutes = 60 * 2,
                    display = document.querySelector('#time');
                    startTimer(fiveMinutes, display);
                },error:function(err) {
                    console.log(err);
                },
            });
        });

        const editPhoneNumberHandler = () => {
            document.getElementById('edit-icon').style.display = 'none';

            phone_number = document.getElementById('phone_number');
            phone_number.disabled = false;
        }

        function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            
            timer = 0;
           
        }
    }, 1000);
}
 const resendSms = () => {
    timer = duration;
    phone_number = document.getElementById('phone_number').value;
    let resend = true;
    console.log(resend);
    $.ajax({
        type: 'post',
        url: '/sms',
        data: {phone_number,resend},
        success:function(res) {
            console.log(res);

        },error:function(err) {
            console.log(err);
        }
    });

 }
    </script>
@endsection