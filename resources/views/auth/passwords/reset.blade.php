
<!doctype html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Crypten – Cryptocurrency & ICO HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('FrontEnd/assets/images/favicon.ico')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/all.css')}}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/nice-select.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/slick.css')}}">

    <!--====== Swiper css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/swiper.min.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/style.css')}}">


</head>

<body>

    <!--====== ERROR PART START ======-->

    <section class="error-area bg_cover" style="background-image: url({{asset('FrontEnd/assets/images/login-bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="login-box">
                        <div class="login-title text-center">
                            <a href="{{url('/')}}"><img src="{{asset('FrontEnd/assets/images/logo-2.png')}}" alt="logo"></a>

                           <a> <h3 class="title">{{ __('Change Your Password') }}</h3></a>
                        </div>
                        <div class="login-input">
                            <form action="{{ route('password.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="input-box mt-10">
                                    <input id="email" type="email" class="py-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input-box mt-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" required="" name="password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input-box mt-10">
                                    <input id="password-confirm" type="password" class="form-control" required="" name="password_confirmation" placeholder="Confirm Password">
                                </div>

                                <div class="input-btn mt-10">
                                    <button class="main-btn" type="submit">{{ __('Reset Password') }}</button>
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
    <script src="{{asset('FrontEnd/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('FrontEnd/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/popper.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('FrontEnd/assets/js/slick.min.js')}}"></script>

    <!--====== Swiper js ======-->
    <script src="{{asset('FrontEnd/assets/js/swiper.min.js')}}"></script>

    <!--====== nice select js ======-->
    <script src="{{asset('FrontEnd/assets/js/jquery.nice-select.min.js')}}"></script>

    <!--====== circle progress js ======-->
    <script src="{{asset('FrontEnd/assets/js/circle-progress.min.js')}}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{asset('FrontEnd/assets/js/jquery.syotimer.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('FrontEnd/assets/js/main.js')}}"></script>

</body>

</html>
