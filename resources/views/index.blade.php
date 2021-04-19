@extends('layouts.main')


@section('header')
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

@endsection
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/apartment.png') }}" alt="">
            </div>
            <div class="col-md-7">
                <h3 class="main-title">{{ __('pages/index.find-your-dream-apartment') }}</h3>
                <div class="main-details">
                    <p>{{ __('pages/index.details-1') }}</p>
                    <p>{{ __('pages/index.details-2') }}</p>
                    <p>{{ __('pages/index.details-3') }}</p>
                    <p>{{ __('pages/index.details-4') }}</p>
                    <a href="#" class="btn btn-primary">{{ __('pages/index.more-about') }}</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">

        <h1 class="main-title"> {{ __('pages/index.our-services') }}</h1>
        <div class="main-details">
            <p>{{ __('pages/index.our-services-details') }}</p>
        </div>
    </div>
    <br>
    <br>
    <div class="row">

        <div class="card-background"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/time.png') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ __('pages/index.fast-and-easy') }}
                            </h4>
                            <p class="card-text">
                                {{ __('pages/index.our-services-details') }}
                                {{ __('pages/index.our-services-details') }}
                            </p>
                            <a href="#" class="btn btn-primary">{{ __('pages/index.more-about') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/home.png') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ __('pages/index.local-property') }}

                            </h4>
                            <p class="card-text">
                                {{ __('pages/index.our-services-details') }}
                                {{ __('pages/index.our-services-details') }}
                            </p>
                            <a href="#" class="btn btn-primary">{{ __('pages/index.more-about') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/images/apartment-2.png') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ __('pages/index.apartment') }}
                            </h4>
                            <p class="card-text">
                                {{ __('pages/index.our-services-details') }}
                                {{ __('pages/index.our-services-details') }}
                            </p>
                            <a href="#" class="btn btn-primary">{{ __('pages/index.more-about') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                <h3 class="main-title">{{ __('pages/index.real-estate-advisor') }}</h3>
                <div class="main-details">
                    <p>{{ __('pages/index.details-1') }}</p>
                    <p>{{ __('pages/index.details-2') }}</p>
                    <p>{{ __('pages/index.details-3') }}</p>
                    <p>{{ __('pages/index.details-4') }}</p>
                    <a href="#" class="btn btn-primary">{{ __('pages/index.more-about') }}</a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/apartments-2.png') }}" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/apartments.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="main-title">{{ __('pages/index.real-estate-advisor') }}</h3>
                <div class="main-details">
                    <p>{{ __('pages/index.details-1') }}</p>
                    <p>{{ __('pages/index.details-2') }}</p>
                    <p>{{ __('pages/index.details-3') }}</p>
                    <p>{{ __('pages/index.details-4') }}</p>
                    <a href="#" class="btn btn-primary">{{ __('pages/index.more-about') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="card-background"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="our-features">
                        <h1 style="margin-right:50px">{{ __('pages/index.our-features') }}</h1>
                        <img src="{{ asset('assets/images/apartments-2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-12"></div>
                <div class="col-md-4 col-sm-12">
                    <div class="our-features">
                        <h1>{{ __('pages/index.on-time') }}</h1>
                        <p>{{ __('pages/index.details-1') }}</p>
                        <p>{{ __('pages/index.details-2') }}</p>
                    </div>
                    <br>

                    <h1 class="text-light">{{ __('pages/index.more-security') }}</h1>
                    <p> <strong> {{ __('pages/index.details-1') }} </strong></p>
                    <p> <strong>{{ __('pages/index.details-2') }}</strong></p>

                </div>


            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{ __('pages/index.ways-of-communication') }}</h1>
                <br>
                <br>
                <div class="footer-communication">
                    <h2><i class="fa fa-map-marker" aria-hidden="true"></i> {{ __('pages/index.address') }}: <span>تهران
                            - انقلاب - خیابان کارگر شمالی</span></h2>
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> {{ __('pages/index.call') }}: <span>021-55446688</span> </h2>
                    <h2><i class="fa fa-envelope" aria-hidden="true"></i> {{ __('pages/index.email') }}: <span>info 78783@gmail.com</span></h2>
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{ __('pages/index.news-letters') }}</h1>
                <br>
                <br>
                <div class="footer-communication">
                    <p>{{ __('pages/index.details-1') }}</p>
                    <p>{{ __('pages/index.details-2') }}</p>
                    <form action="" method="POST">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><button
                                    type="submit">{{ __('pages/index.send') }}</button></span>
                            <input type="text" placeholder="info@gmail.com" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('footer')


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
</body>

</html>
@endsection
