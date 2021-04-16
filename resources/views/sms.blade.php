@extends('layouts.main')


@section('content')
<form id="myForm" action="{{ route('sendSms') }}" method="POST" role="form">
    {{csrf_field()}}

        <div class="form-group">
            <input class="form-control" placeholder="Your Phone Number" id="phone_number" name="phone_number" type="number" autofocus>
        </div>
        <div id="code"></div>
       
        <!-- Change this to a button or input when using this as a form -->
        <button id="submitBtn" type="submit" class="btn btn-success btn-block">Send Message</button>

</form>
@endsection

@section('footer')
    <script>
        $('#myForm').on('submit',function(e) {
            e.preventDefault();
            const phone_number = document.getElementById('phone_number').value;
            const code = document.getElementById('code');
            $.ajax({
                type: 'post',
                url: '/sms',
                data: {phone_number},
                success:function(res) {
            
                    code.innerHTML = ` <label for="">Enter your verification code</label>
                    <input type="text" placeholder="Enter your code">`;
                    
                },error:function(err) {
                    console.log(err);
                },
            });
        });
    </script>
@endsection