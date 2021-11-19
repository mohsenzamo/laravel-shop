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
                <h2>ویژگی های ما</h2>
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

<!-- Start Features Area -->
<section class="features-area saas-features ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>ویژگی های شگفت انگیز ما</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-lock"></i>
                    </div>
                    <h3>دسترسی سریع</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-heart-eyes"></i>
                    </div>
                    <h3>مدیریت راحت</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-lock"></i>
                    </div>
                    <h3>ایمنی</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-camera"></i>
                    </div>
                    <h3>فیلتر دوربین</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-responsive"></i>
                    </div>
                    <h3>سریع و بهینه شده</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-hand-drag1"></i>
                    </div>
                    <h3>دراگ و دراپ</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="features-inner-area">
        <div class="container-fluid">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="features-image">
                        <img src="/ClientCss/assets/img/features-img1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="features-inner-content">
                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-ui-call"></i>
                            </div>
                            <h3>خدمات تلفن رایگان</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>

                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-gift"></i>
                            </div>
                            <h3>هدیه رایگان روزانه</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>

                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-qr-code"></i>
                            </div>
                            <h3>اسکنر QR کد</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape7"><img src="/ClientCss/assets/img/shape7.png" alt="shape"></div>
    <div class="shape3"><img src="/ClientCss/assets/img/shape3.png" alt="img"></div>
    <div class="bg-gray shape-1"></div>
    <div class="shape6"><img src="/ClientCss/assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="/ClientCss/assets/img/shape8.svg" alt="shape"></div>
    <div class="shape9"><img src="/ClientCss/assets/img/shape9.svg" alt="shape"></div>
    <div class="shape10"><img src="/ClientCss/assets/img/shape10.svg" alt="shape"></div>
    <div class="shape11 rotateme"><img src="/ClientCss/assets/img/shape11.svg" alt="shape"></div>
</section>
<!-- End Features Area -->

<!-- Start Overview Area -->
<section class="overview-section ptb-100 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>کشف موارد بیشتر</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
        </div>

        <div class="overview-box">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 overview-img">
                    <img src="/ClientCss/assets/img/overview-1.png" alt="image">
                </div>

                <div class="col-lg-6 col-md-6 overview-content">
                    <div class="icon">
                        <i class="icofont-power"></i>
                    </div>
                    <h3>آغاز صفحه</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                    <ul>
                        <li>تماس ویدیویی نامحدود</li>
                        <li>اضافه کردن مخاطب مورد علاقه</li>
                        <li>فیلتر دوربین</li>
                    </ul>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 overview-content">
                    <div class="icon">
                        <i class="icofont-anchor"></i>
                    </div>
                    <h3>تکرار نظرات قدیمی</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                    <ul>
                        <li>تماس ویدیویی نامحدود</li>
                        <li>اضافه کردن مخاطب مورد علاقه</li>
                        <li>فیلتر دوربین</li>
                    </ul>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>

                <div class="col-lg-6 col-md-6 overview-img">
                    <img src="/ClientCss/assets/img/overview-1.png" alt="image">
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 overview-img">
                    <img src="/ClientCss/assets/img/overview-1.png" alt="image">
                </div>

                <div class="col-lg-6 col-md-6 overview-content">
                    <div class="icon">
                        <i class="icofont-users-social"></i>
                    </div>
                    <h3>تصاویر بررسی کد</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                    <ul>
                        <li>تماس ویدیویی نامحدود</li>
                        <li>اضافه کردن مخاطب مورد علاقه</li>
                        <li>فیلتر دوربین</li>
                    </ul>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 overview-content">
                    <div class="icon">
                        <i class="icofont-ui-messaging"></i>
                    </div>
                    <h3>ما کارکنان حرفه ای را ارائه می دهیم</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                    <ul>
                        <li>تماس ویدیویی نامحدود</li>
                        <li>اضافه کردن مخاطب مورد علاقه</li>
                        <li>فیلتر دوربین</li>
                    </ul>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>

                <div class="col-lg-6 col-md-6 overview-img">
                    <img src="/ClientCss/assets/img/overview-1.png" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="shape7"><img src="/ClientCss/assets/img/shape7.png" alt="shape"></div>
    <div class="shape3"><img src="/ClientCss/assets/img/shape3.png" alt="img"></div>
    <div class="bg-gray shape-1"></div>
    <div class="shape6"><img src="/ClientCss/assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="/ClientCss/assets/img/shape8.svg" alt="shape"></div>
    <div class="shape9"><img src="/ClientCss/assets/img/shape9.svg" alt="shape"></div>
    <div class="shape10"><img src="/ClientCss/assets/img/shape10.svg" alt="shape"></div>
    <div class="shape11 rotateme"><img src="/ClientCss/assets/img/shape11.svg" alt="shape"></div>
</section>
<!-- End Overview Area -->

@endsection