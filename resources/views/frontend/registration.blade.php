<!doctype html>
<html lang="en">
@php
    $slug =  session::get('slug');
@endphp
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Crypten – Cryptocurrency & ICO HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('FrontEnd/assets/images/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/all.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/nice-select.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/slick.css') }}">

    <!--====== Swiper css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/swiper.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('FrontEnd/assets/css/style.css') }}">


</head>

<body>

    <!--====== ERROR PART START ======-->

    <section class="error-area bg_cover"
        style="background-image: url({{ asset('FrontEnd/assets/images/login-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="login-box">
                        <div class="login-title text-center">
                            <a href="{{ url('/') }}"> <img src="{{ asset('FrontEnd/assets/images/logo-2.png') }}"
                                    alt="logo"></a>

                            <h3 class="title">Create an Account!</h3>
                        </div>
                        <div class="login-input">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="input-box mt-10">
                                    <input type="text" name="ref_from" placeholder="Refered By" value="{{$slug ?? null}}">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="hidden" name="status" value="2">
                                </div>
                                <div class="input-box mt-10">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required placeholder="Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-box mt-10">
                                    <input class="form-control @error('sure_name') is-invalid @enderror" type="text" name="sure_name" value="{{ old('sure_name') }}" required placeholder="Surname">

                                    @error('sure_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-box mt-10">
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" required placeholder="Phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-box mt-10">
                                    <input class="form-control @error('date_of_birth') is-invalid @enderror" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Date Of Birth">
                                </div>
                                <div class="input-box mt-10">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-box mt-10">
                                    <input class="form-control @error('password') is-invalid @enderror" required type="password" name="password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-box mt-10">
                                    <input class="form-control" required type="password" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div class="input-btn mt-10">
                                    <button class="main-btn" type="submit">Register <i
                                            class="fal fa-arrow-right"></i></button>
                                    <span>Have an account? <a href="{{ url('login-panel') }}">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ERROR PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="{{ asset('FrontEnd/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('FrontEnd/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('FrontEnd/assets/js/slick.min.js') }}"></script>

    <!--====== Swiper js ======-->
    <script src="{{ asset('FrontEnd/assets/js/swiper.min.js') }}"></script>

    <!--====== nice select js ======-->
    <script src="{{ asset('FrontEnd/assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== circle progress js ======-->
    <script src="{{ asset('FrontEnd/assets/js/circle-progress.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('FrontEnd/assets/js/jquery.syotimer.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('FrontEnd/assets/js/main.js') }}"></script>

</body>

</html>
