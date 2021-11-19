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
                <h2>قیمت</h2>
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

<!-- Start Pricing Area -->
<section class="pricing-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricingTable">
                    <div class="pricing-icon">
                        <i class="icofont-globe"></i>
                    </div>
                    <div class="price-Value">
                        <span class="currency">تومان</span>15
                    </div>
                    <span class="month">/ماه</span>
                    <div class="pricingHeader">
                        <h3 class="title">شخصی</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li class="active">ارسال 5 فاکتورها و نقل قول ها</li>
                            <li class="active">2 مشتریان و محصولات</li>
                            <li class="active">صورتحساب و پرداخت</li>
                            <li class="active">5 عدد را وارد کنید</li>
                            <li class="active">امنیت داده ها و پشتیبان گیری</li>
                            <li>حساب های نامحدود حسابداری</li>
                            <li>ویجت رزرو آنلاین</li>
                            <li>گزارش ماهانه و تجزیه و تحلیل</li>
                            <li>24/7 پشتیبانی</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricingTable">
                    <div class="pricing-icon">
                        <i class="icofont-globe"></i>
                    </div>
                    <div class="price-Value">
                        <span class="currency">تومان</span>39
                    </div>
                    <span class="month">/ماه</span>
                    <div class="pricingHeader">
                        <h3 class="title">شرکتی</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li class="active">ارسال 5 فاکتورها و نقل قول ها</li>
                            <li class="active">2 مشتریان و محصولات</li>
                            <li class="active">صورتحساب و پرداخت</li>
                            <li class="active">5 عدد را وارد کنید</li>
                            <li class="active">امنیت داده ها و پشتیبان گیری</li>
                            <li class="active">حساب های نامحدود حسابداری</li>
                            <li class="active">ویجت رزرو آنلاین</li>
                            <li>گزارش ماهانه و تجزیه و تحلیل</li>
                            <li>24/7 پشتیبانی</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="pricingTable">
                    <div class="pricing-icon">
                        <i class="icofont-globe"></i>
                    </div>
                    <div class="price-Value">
                        <span class="currency">تومان</span>99
                    </div>
                    <span class="month">/ماه</span>
                    <div class="pricingHeader">
                        <h3 class="title">شرکت، پروژه</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li class="active">ارسال 5 فاکتورها و نقل قول ها</li>
                            <li class="active">2 مشتریان و محصولات</li>
                            <li class="active">صورتحساب و پرداخت</li>
                            <li class="active">5 عدد را وارد کنید</li>
                            <li class="active">امنیت داده ها و پشتیبان گیری</li>
                            <li class="active">حساب های نامحدود حسابداری</li>
                            <li class="active">ویجت رزرو آنلاین</li>
                            <li class="active">گزارش ماهانه و تجزیه و تحلیل</li>
                            <li class="active">24/7 پشتیبانی</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->

@endsection