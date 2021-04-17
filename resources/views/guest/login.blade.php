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
                <form id="form-login" action="{{ route('sendSms') }}" method="POST">
                    <div class="mb-3">
                        <label for="phone_number">شماره موبایل خود را وارد کنید</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone_number" id="phone_number" class="form-control"  placeholder="*********09" required>
                    </div>
                    <div id="code" class="mb-3"></div>

                    <div class="text-center">
                        <button type="submit" id="loginBtn" class="mx-auto">ورود</button>
                        <p id="wrongCode" class="text-danger"></p>
                        <p id="time"></p>

                    </div>
                </form>
          </div>
      </div>
  </div>

@endsection


@section('footer')
    <script>
        $('#phone_number')
            .on('invalid', function(){
                return this.setCustomValidity('شماره موبایل وارد نمایید');
            })
            .on('input', function(){
                return this.setCustomValidity('');
        });

        let phone_number;
        let twoMinutes;
        let timerHandler;
        let formData;
        let editPhoneNumber = false;
          $('#form-login').on('submit',function(e) {
            e.preventDefault();

            phone_number = document.getElementById('phone_number');

            const code = document.getElementById('code');
            const change_form = document.getElementById('changeForm');
            const loginBtn = document.getElementById('loginBtn');


            $.ajax({
                type: 'post',
                url: '/sms',
                data: {phone_number:phone_number.value},
                success:function(res) {
            console.log(res);

                    if(res.has_number == 1) {
                    code.innerHTML = ` <label for="">کد تایید</label>
                    <input type="text" name="verification_code" id="verification_code" class="form-control" placeholder="کد تایید ارسال شده را وارد کنید">
                    `;
                    loginBtn.setAttribute('type','button');
                    loginBtn.onclick = function() {loginHandler()};
                    phone_number.disabled = true;


                    } else if (res.has_number == 0) {
                        change_form.innerHTML = `    <h1 class="text-center">ثبت نام کنید</h1>
                <br>
                <form id="form-register">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname-lname">نام و نام خانوادگی</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="محمد محمدی">
                        </div>
                        <div class="col-md-6">
                            <label for="gender">جنسیت</label>
                            <select name="gender" id="" class="form-select">
                                <option value="">انتخاب کنید</option>
                                <option value="0">مرد</option>
                                <option value="1">زن</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="email">ایمیل (اختیاری)</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="info@gmail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="phone">شماره تلفن همراه</label>
                            <input type="text" name="phone_number" value="${phone_number.value}" id="phone_number"  disabled class="form-control" placeholder="09*********" required>
                            <i onclick="editPhoneNumberHandler()" id="edit-icon" class="fa fa-pencil" aria-hidden="true">ویرایش</i>
                        </div>
                        <div class="col-md-6">
                            <label for="verification_code">کد تایید</label>
                            <input type="text" name="verification_code" id="verification_code" minlength="6" maxlength="6"  class="form-control" placeholder="کد شش رقمی ارسال شده">
                        </div>
                    </div>

                    <br>
                    <div class="text-center">
                        <button type="button" onclick="registerHandler()" class="mx-auto">ثبت نام </button>

                        <p id="wrongCode" class="text-danger"></p>
                        <p id="time"></p>
                    </div>
                </form>`;
                    }

                    twoMinutes = 15 * 1,
                    display = document.querySelector('#time');
                    startTimer(twoMinutes, display);
                },error:function(err) {
                    if(err.status == 422)
                {
                      document.getElementById('wrongCode').innerHTML = 'شماره موبایل معتبر وارد کنید';
                } else {

                    document.getElementById('wrongCode').innerHTML = 'خطا! دوباره تلاش کنید';

                }

                },
            });
        });

        const editPhoneNumberHandler = () => {
            editPhoneNumber = true;
            document.getElementById('edit-icon').style.display = 'none';

            phone_number = document.getElementById('phone_number');
            phone_number.disabled = false;
        }

        function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        timerHandler = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
        display.innerHTML += `<button type="button" onclick="resendSms()" id="resendBtn" class="btn btn-primary">ارسال مجدد کد</button>`;

            timer = 0;


        }
    }, 1000);
}
 const resendSms = () => {
    window.clearInterval(timerHandler);
    twoMinutes = 15 * 1;
    startTimer(twoMinutes, display);
    phone_number = document.getElementById('phone_number').value;

    $.ajax({
        type: 'post',
        url: '/sms',
        data: {phone_number,editPhoneNumber},
        success:function(res) {
            document.getElementById('wrongCode').innerHTML = 'ارسال شد';


        },error:function(err) {


            if(err.status == 422) {
                document.getElementById('wrongCode').innerHTML = 'شماره موبایل معتبر وارد کنید';

            } else {

            document.getElementById('wrongCode').innerHTML = 'خطا! دوباره تلاش کنید';
            }

        }
    });

 }

 const registerHandler = () => {

    if(document.getElementById('name').value == 0) {
        document.getElementById('wrongCode').innerHTML = 'اسم خودرا وارد کنید';

    } else if (document.getElementById('phone_number').value == 0) {
        document.getElementById('wrongCode').innerHTML = 'شماره موبایل خود را وارد کنید';
    } else if (document.getElementById('verification_code').value == 0) {
        document.getElementById('wrongCode').innerHTML = 'کد تایید را وارد کنید';

    } else {

    formData =   $('#form-register').serializeArray();
    phone_number = document.getElementById('phone_number').value;
    formData.push({ name:'phone_number' , value:phone_number });
        console.log('register');
    $.ajax({
        url: '/register',
        type: 'post',
        data: formData,
        success:function(res) {
            console.log(res);
            if(res.status == 200)
            {
                window.location.href = 'http://example.test/user';
            } else {
                document.getElementById('wrongCode').innerHTML = 'کد تایید اشتباه است!';
            }

        },error:function(err) {

            if(err.status == 422) {
                document.getElementById('wrongCode').innerHTML = 'شماره موبایل معتبر وارد کنید';

            } else {

            document.getElementById('wrongCode').innerHTML = 'خطا! دوباره تلاش کنید';
            }

        },
    });
}


 }

 const loginHandler = () => {

if(document.getElementById('verification_code').value == 0 ) {
    document.getElementById('wrongCode').innerHTML = '<p>کد تایید را وارد کنید</p>'
} else {

    formData = $('#form-login').serializeArray();
    formData.push({name:'phone_number',value:phone_number.value});
    $.ajax({
        type:'post',
        url: '/login',
        data: formData,
        success:function(res) {
                if(res.status == 200) {
                    window.location.href = 'http://example.test/user';
                } else {
                    document.getElementById('wrongCode').innerHTML = 'کد تایید اشتباه است';
                }
            },error:function(err) {

                document.getElementById('wrongCode').innerHTML = 'خطا! دوباره تلاش کنید';

            }

    });
}


 }
    </script>
@endsection
