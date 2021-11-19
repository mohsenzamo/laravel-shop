@extends('ClientView/Master/total')
@section('content')
<!-- Start Search Box -->
<div id="header-search" class="header-search">
    <button type="button" class="close">×</button>
    <form class="header-search-form">
        <input type="search" value="" placeholder="همینجا تایپ کنید........" />
        <button type="submit" class="btn btn-primary">جستجو</button>
    </form>
</div>
<!-- End Search Box -->

<!-- Start Page Title Area -->
<section class="page-title-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>ورود</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="/ClientCss/assets/img/shape1.png" alt="img"></div>
    <div class="shape2"><img src="/ClientCss/assets/img/shape2.png" alt="img"></div>
    <div class="shape3"><img src="/ClientCss/assets/img/shape3.png" alt="img"></div>
    <div class="shape6"><img src="/ClientCss/assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="/ClientCss/assets/img/shape8.svg" alt="shape"></div>
    <div class="shape9"><img src="/ClientCss/assets/img/shape9.svg" alt="shape"></div>

    <!-- Bubble Animte -->
    <div class="bubble-animate">
        <div class="circle small square1"></div>
        <div class="circle small square2"></div>
        <div class="circle small square3"></div>
        <div class="circle small square4"></div>
        <div class="circle small square5"></div>
        <div class="circle medium square1"></div>
        <div class="circle medium square2"></div>
        <div class="circle medium square3"></div>
        <div class="circle medium square4"></div>
        <div class="circle medium square5"></div>
        <div class="circle large square1"></div>
        <div class="circle large square2"></div>
        <div class="circle large square3"></div>
        <div class="circle large square4"></div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="login-image">
                    <img src="/ClientCss/assets/img/marketing.png" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="login-form">
                    <h3>خوش آمدید!</h3>
                    <p>لطفا وارد حساب کاربری خود شوید.</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="ایمیل">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="رمز عبور">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">مرا به خاطر بسپار!</label>
                                </div>
                            </div>

                            <div class="col-lg-6 text-right">
                                <p class="forgot-password"><a href="#">فراموشی رمز عبور؟</a></p>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">هم اکنون وارد شوید!</button>
                                <br>
                                <span>کاربر جدید هستید؟ <a href="{{route('SingUpViewRoute')}}">ثبت نام کن!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection