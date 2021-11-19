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
                <h2>تماس با ما</h2>
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

<!-- Start Contact Info Area -->
<section class="contact-info-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="icofont-email"></i>
                    </div>
                    <h3>ایمیل اینجا</h3>
                    <p><a href="#">admin@crake.com</a></p>
                    <p><a href="#">info@crake.com</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="icofont-google-map"></i>
                    </div>
                    <h3>اینجا را ببینید</h3>
                    <p>کالیفرنیا/ خیابان تالیس</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="icofont-phone"></i>
                    </div>
                    <h3>اینجا تماس بگیرید</h3>
                    <p><a href="#">+123 456 7890</a></p>
                    <p><a href="#">+241 452 4526</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Map -->
<div id="map"></div>

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>با ما در تماس باشید</h2>
            <div class="bar"></div>
            <p>همه چیز در ذهن شما. ما خوشحال خواهیم شد که به شما کمک کنیم!</p>
        </div>

        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <img src="/ClientCss/assets/img/marketing.png" alt="image">
            </div>

            <div class="col-lg-6 col-md-12">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" required data-error="لطفا نام خود را وارد کنید" placeholder="نام">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" required data-error="لطفا آدرس ایمیل خود را وارد نمایید" placeholder="ایمیل">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="تلفن">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="موضوع">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="پیام خود را بنویسید" placeholder="پیام شما"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">ارسال پیام</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
@endsection