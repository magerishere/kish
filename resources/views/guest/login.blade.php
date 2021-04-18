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
                        <label for="phone_number">شماره موبایل یا ایمیل خود را وارد کنید</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone_number" id="phone_number" class="form-control"  placeholder="*********09" required>
                    </div>
                    <div id="code" class="mb-3"></div>

                    <div class="text-center">
                        <button type="button" onclick="send_verification_code_handler()" id="loginBtn" class="mx-auto">ورود</button>
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
        let phone_number,twoMinutes,timerHandler,formData,editPhoneNumber,errorMessage;
        const login_form_with_phone_number = `<label for="verification_code">کد تایید</label>
                    <input type="text"
                    name="verification_code"
                    id="verification_code"
                    class="form-control"
                    placeholder="کد تایید ارسال شده را وارد کنید">`;
        const login_form_with_email = `<label for="password">رمزعبور خود را وارد کنید</label>
                    <input type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="رمزعبور....">`;
        const register_form = (phone_number) => {
                return `<h1 class="text-center">ثبت نام کنید</h1>
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
                            <input type="text" name="phone_number" value="${phone_number}" id="phone_number"  class="form-control" placeholder="09*********" required>
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
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        const send_verification_code_handler = () => {
            errorMessage            = document.getElementById('wrongCode');
            errorMessage.innerHTML  = '';
            phone_number            = document.getElementById('phone_number');
            const code              = document.getElementById('code');
            const change_form       = document.getElementById('changeForm');
            const loginBtn          = document.getElementById('loginBtn');

            if(validateEmail(phone_number.value))
            {
                formData = {email:phone_number.value} // if user want logging with email
                phone_number.setAttribute('name','email');
                phone_number.setAttribute('id','email');
            } else {
                formData = {phone_number:phone_number.value} // if user want loggin with phone
            }
            $.ajax({
                type: 'post',
                url: '/sms',
                data: formData,
                success:function(res) {

                    if(res.has_number == 1) {
                        code.innerHTML = login_form_with_phone_number;
                        loginBtn.onclick = function() {loginHandler()};
                    } else if (res.has_number == 0) {
                        change_form.innerHTML = register_form(phone_number.value);
                    } else if (res.has_email == 1) {
                        code.innerHTML = login_form_with_email;
                        loginBtn.onclick = function() {loginHandler()};
                    }

                    if(res.has_number)
                    {
                        twoMinutes = 15 * 1,
                        display = document.querySelector('#time');
                        startTimer(twoMinutes, display);
                    }
                },error:function(err) {
                    if(err.responseJSON.errors)
                    {
                        if(err.responseJSON.errors.phone_number) errorMessage.innerHTML += err.responseJSON.errors.phone_number + '<br>';
                    }
                },
            });
        }

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
    errorMessage = document.getElementById('wrongCode');
    errorMessage.innerHTML = '';
    const name = document.getElementById('name');
    const name_is_persian = /^[\u0600-\u06FF\s]+$/;

    formData =   $('#form-register').serialize();

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
                errorMessage.innerHTML = 'کد تایید اشتباه است!';
            }

        },error:function(err) {
            if(!name_is_persian.test(name.value))
            {
                errorMessage.innerHTML += 'اسم خود را به صورت حروف فارسی وارد کنید' + '<br>';
            }
            if(err.responseJSON.errors)
            {
                if(err.responseJSON.errors.name)                errorMessage.innerHTML += err.responseJSON.errors.name + '<br>';
                if(err.responseJSON.errors.gender)              errorMessage.innerHTML +=  err.responseJSON.errors.gender + '<br>';
                if(err.responseJSON.errors.email)               errorMessage.innerHTML += err.responseJSON.errors.email + '<br>';
                if(err.responseJSON.errors.phone_number)        errorMessage.innerHTML += err.responseJSON.errors.phone_number + '<br>';
                if(err.responseJSON.errors.verification_code)   errorMessage.innerHTML += err.responseJSON.errors.verification_code + '<br>';
            }

        },
    });



 }

 const loginHandler = () => {
    errorMessage.innerHTML = '';
    formData = $('#form-login').serialize();

    $.ajax({
        type:'post',
        url: '/login',
        data: formData,
        success:function(res) {
            console.log(res,'res');
                if(res.status == 200) {
                    window.location.href = 'http://example.test/user';
                } else {
                    document.getElementById('wrongCode').innerHTML = 'کد تایید اشتباه است';
                }
            },error:function(err) {
                console.log(err);
                if(err.responseJSON.errors)
                {
                    if(err.responseJSON.errors.phone_number)        errorMessage.innerHTML += err.responseJSON.errors.phone_number + '<br>';
                    if(err.responseJSON.errors.verification_code)   errorMessage.innerHTML += err.responseJSON.errors.verification_code + '<br>';
                }
            }
    });
 }

    </script>
@endsection
