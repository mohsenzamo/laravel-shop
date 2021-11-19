@extends('ClientView.Master.total')
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

<!-- Start SaaS Main Banner -->
<div class="main-banner saas-home">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="saas-image">
                            <img src="/ClientCss/assets/img/saas-shape/arrow.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="arrow">
                            <img src="/ClientCss/assets/img/saas-shape/box1.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="box1">
                            <img src="/ClientCss/assets/img/saas-shape/boy1.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="boy1">
                            <img src="/ClientCss/assets/img/saas-shape/boy2.png" class="wow zoomIn" data-wow-delay="0.6s" alt="boy2">
                            <img src="/ClientCss/assets/img/saas-shape/boy3.png" class="wow bounceIn" data-wow-delay="0.6s" alt="boy3">
                            <img src="/ClientCss/assets/img/saas-shape/digital-screen.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="digital-screen">
                            <img src="/ClientCss/assets/img/saas-shape/filter1.png" class="wow zoomIn" data-wow-delay="0.6s" alt="filter1">
                            <img src="/ClientCss/assets/img/saas-shape/filter2.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="filter2">
                            <img src="/ClientCss/assets/img/saas-shape/filter3.png" class="wow rotateIn" data-wow-delay="0.6s" alt="filter3">
                            <img src="/ClientCss/assets/img/saas-shape/girl1.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="girl1">
                            <img src="/ClientCss/assets/img/saas-shape/girl2.png" class="wow zoomIn" data-wow-delay="0.6s" alt="girl2">
                            <img src="/ClientCss/assets/img/saas-shape/monitor.png" class="wow zoomIn" data-wow-delay="0.6s" alt="monitor">

                            <img src="/ClientCss/assets/img/saas-shape/main-image.png" class="wow zoomIn" data-wow-delay="0.6s" alt="main-image.png">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="hero-content pl-4">
                            <h1>استراتژی کسب و کار خود را در یک مکان حرفه ای مدیریت کنید</h1>
                            <p>شور و شوق ما به کار سخت و ارائه نتایج عالی است. این می تواند نیازهای مشتریان خود را حل کند و نوآوری را توسعه دهد.</p>
                            <a href="#" class="btn btn-primary">شروع کنید</a>
                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray shape-1"></div>
    <div class="shape1"><img src="/ClientCss/assets/img/shape1.png" alt="img"></div>
    <div class="shape2"><img src="/ClientCss/assets/img/shape2.png" alt="img"></div>
    <div class="shape3"><img src="/ClientCss/assets/img/shape3.png" alt="img"></div>
    <div class="shape4 rotateme"><img src="/ClientCss/assets/img/shape4.png" alt="img"></div>
</div>
<!-- End SaaS Main Banner -->

<!-- Start Features Area -->
<section class="features-area saas-features ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>ویژگی های شگفت انگیز ما</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-lock"></i>
                    </div>
                    <h3>دسترسی سریع</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-heart-eyes"></i>
                    </div>
                    <h3>مدیریت راحت</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-lock"></i>
                    </div>
                    <h3>امنیتی</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-camera"></i>
                    </div>
                    <h3>فیلتر دوربین</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-responsive"></i>
                    </div>
                    <h3>سریع و بهینه شده</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="icofont-hand-drag1"></i>
                    </div>
                    <h3>دراگ و دراپ</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
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
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>

                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-gift"></i>
                            </div>
                            <h3>هدیه رایگان روزانه</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>

                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-qr-code"></i>
                            </div>
                            <h3>اسکنر QR کد</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
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
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
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
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

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
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                    <ul>
                        <li>تماس ویدیویی نامحدود</li>
                        <li>اضافه کردن مخاطب مورد علاقه</li>
                        <li>فیلتر دوربین</li>
                    </ul>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>

                <div class="col-lg-6 col-md-6 app-fetured-item">
                    <div class="app-item item-one">
                        <i class="icofont-wink-smile"></i>
                        <h6>جامعه پسند</h6>
                    </div>

                    <div class="app-item item-two">
                        <i class="icofont-ebook"></i>
                        <h6>قیمت گذاری صادقانه</h6>
                    </div>

                    <div class="app-item item-three">
                        <i class="icofont-wink-smile"></i>
                        <h6>مدیریت</h6>
                    </div>

                    <div class="app-item item-four">
                        <i class="icofont-stock-mobile"></i>
                        <h6>طراحی موبایل</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="overview-box">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 overview-img">
                    <img src="/ClientCss/assets/img/overview-3.png" alt="image">
                </div>

                <div class="col-lg-6 col-md-6 overview-content">
                    <div class="icon">
                        <i class="icofont-users-social"></i>
                    </div>
                    <h3>تصاویر بررسی کد</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

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
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                    <ul>
                        <li>تماس ویدیویی نامحدود</li>
                        <li>اضافه کردن مخاطب مورد علاقه</li>
                        <li>فیلتر دوربین</li>
                    </ul>
                    <a href="#" class="btn btn-primary">ادامه مطلب</a>
                </div>

                <div class="col-lg-6 col-md-6 overview-img">
                    <img src="/ClientCss/assets/img/overview-4.png" alt="image">
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

<!-- Start Join Area -->
<section class="join-area ptb-100">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="join-img">
                    <img src="/ClientCss/assets/img/3.png" alt="img">
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="join-content">
                    <span>شروع آزمایشی رایگان 30 روزه</span>
                    <h3>به طور کلی 400K + مشتریان ما! لطفا شروع کنید</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    <a href="#" class="btn btn-primary">هم اکنون وارد شوید</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Join Area -->

<!-- Start CTA Area -->
<div class="cta-area">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-7 col-md-7">
                <p>می خواهید پیشرفت کنید؟ با ما همراه باشید</p>
            </div>

            <div class="col-lg-5 col-md-5 text-right">
                <a href="#" class="btn btn-primary">یک تست درایو بگیرید</a>
            </div>
        </div>
    </div>
</div>
<!-- End CTA Area -->

<!-- Start SAAS Tools Area -->
<section class="saas-tools ptb-100 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>ابزار برای همه</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tab">
                    <ul class="tabs">
                        <li><a href="#">
                                <i class="icofont-dashboard-web"></i>
                                <br>
                                داشبورد
                            </a></li>

                        <li><a href="#">
                                <i class="icofont-inbox"></i>
                                <br>
                                صندوق ورودی
                            </a></li>

                        <li><a href="#">
                                <i class="icofont-ui-calendar"></i>
                                <br>
                                تقویم
                            </a></li>

                        <li><a href="#">
                                <i class="icofont-copy-invert"></i>
                                <br>
                                صورتحساب
                            </a></li>

                        <li><a href="#">
                                <i class="icofont-wrench"></i>
                                <br>
                                گزارش نویسی
                            </a></li>
                    </ul>

                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_content mt-0">
                                        <h3>داشبورد</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        <ul>
                                            <li><i class="icofont-ui-check"></i> طراحی خلاقانه</li>
                                            <li><i class="icofont-ui-check"></i> رتینا آماده</li>
                                            <li><i class="icofont-ui-check"></i> طراحی مدرن</li>
                                            <li><i class="icofont-ui-check"></i> بازاریابی دیجیتال و نام تجاری</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_img">
                                        <img src="/ClientCss/assets/img/features-img1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_img">
                                        <img src="/ClientCss/assets/img/features-img1.png" alt="img">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_content mb-0">
                                        <h3>صندوق ورودی</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        <ul>
                                            <li><i class="icofont-ui-check"></i> طراحی خلاقانه</li>
                                            <li><i class="icofont-ui-check"></i> رتینا آماده</li>
                                            <li><i class="icofont-ui-check"></i> طراحی مدرن</li>
                                            <li><i class="icofont-ui-check"></i> بازاریابی دیجیتال و نام تجاری</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_content mt-0">
                                        <h3>تقویم</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        <ul>
                                            <li><i class="icofont-ui-check"></i> طراحی خلاقانه</li>
                                            <li><i class="icofont-ui-check"></i> رتینا آماده</li>
                                            <li><i class="icofont-ui-check"></i> طراحی مدرن</li>
                                            <li><i class="icofont-ui-check"></i> بازاریابی دیجیتال و نام تجاری</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_img">
                                        <img src="/ClientCss/assets/img/features-img1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_img">
                                        <img src="/ClientCss/assets/img/features-img1.png" alt="img">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_content mb-0">
                                        <h3>صورتحساب</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        <ul>
                                            <li><i class="icofont-ui-check"></i> طراحی خلاقانه</li>
                                            <li><i class="icofont-ui-check"></i> رتینا آماده</li>
                                            <li><i class="icofont-ui-check"></i> طراحی مدرن</li>
                                            <li><i class="icofont-ui-check"></i> بازاریابی دیجیتال و نام تجاری</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_content mt-0">
                                        <h3>گزارش نویسی</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        <ul>
                                            <li><i class="icofont-ui-check"></i> طراحی خلاقانه</li>
                                            <li><i class="icofont-ui-check"></i> رتینا آماده</li>
                                            <li><i class="icofont-ui-check"></i> طراحی مدرن</li>
                                            <li><i class="icofont-ui-check"></i> بازاریابی دیجیتال و نام تجاری</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs_item_img">
                                        <img src="/ClientCss/assets/img/features-img1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="/ClientCss/assets/img/shape1.png" alt="img"></div>
    <div class="shape2"><img src="/ClientCss/assets/img/shape2.png" alt="img"></div>
    <div class="shape3"><img src="/ClientCss/assets/img/shape3.png" alt="img"></div>
    <div class="shape6"><img src="/ClientCss/assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="/ClientCss/assets/img/shape8.svg" alt="shape"></div>

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
<!-- End SAAS Tools Area -->

<!-- Start Fun Facts Area -->
<section class="fun-facts-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-users"></i>
                    </div>
                    <h3><span class="count">806</span></h3>
                    <p>مشتریان رضایت مند</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-thumbs-up"></i>
                    </div>
                    <h3><span class="count">202</span></h3>
                    <p>قدردانی</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-diamond"></i>
                    </div>
                    <h3><span class="count">5241</span></h3>
                    <p>زمان پاسخ گویی</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-wrench"></i>
                    </div>
                    <h3><span class="count">512</span></h3>
                    <p>ورود اطلاعات</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts-inner-area">
        <div class="container-fluid">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="fun-facts-image">
                        <img src="/ClientCss/assets/img/features-img2.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="fun-facts-inner-content">
                        <h3>ساخت رابط زیبا در برنامه شما</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <p>طراحی وب پاسخگو طرح توسعه نوآورانه توسعه نوآورانه مشتری است رابط کاربری تحقیق و توسعه پروژه.</p>
                        <ul>
                            <li>تماس ویدیویی نامحدود</li>
                            <li>اضافه کردن مخاطب مورد علاقه</li>
                            <li>فیلتر دوربین</li>
                        </ul>
                        <a href="#" class="btn btn-primary">ادامه مطلب</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->

<!-- Start Work Process Area -->
<section class="saas-work-process ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>فرآیند کار</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-work-process">
                    <div class="icon">
                        <i class="icofont-calendar"></i>
                    </div>
                    <h3>پلن</h3>
                    <p>بهترین قیمت ها را از ما بخواهید</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-work-process">
                    <div class="icon">
                        <i class="icofont-code-alt"></i>
                    </div>
                    <h3>توسعه</h3>
                    <p>بهترین قیمت ها را از ما بخواهید</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-work-process">
                    <div class="icon">
                        <i class="icofont-server"></i>
                    </div>
                    <h3>اجرا</h3>
                    <p>بهترین قیمت ها را از ما بخواهید</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-work-process">
                    <div class="icon">
                        <i class="icofont-check"></i>
                    </div>
                    <h3>گزارش</h3>
                    <p>بهترین قیمت ها را از ما بخواهید</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Work Process Area -->

<!-- Start Pricing Area -->
<section class="pricing-area ptb-100 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>طرح های قیمت گذاری آسان</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricingTable">
                    <div class="pricing-icon">
                        <i class="icofont-globe"></i>
                    </div>
                    <div class="price-Value">
                        <span class="currency">هزار تومان</span>15
                    </div>
                    <span class="month">/ماه</span>
                    <div class="pricingHeader">
                        <h3 class="title">شخصی</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li class="active">5 ارسال فاکتورها و نقل</li>
                            <li class="active">2 مشتری و محصولات</li>
                            <li class="active">صورتحساب و پرداخت</li>
                            <li class="active">وارد کردن 5 صورتحساب</li>
                            <li class="active">امنیت اطلاعات و پشتیبان گیری</li>
                            <li>حساب کارکنان فضای مجاز: نامحدود</li>
                            <li>وب رزرو ویجت</li>
                            <li>گزارشات ماهانه و تجزیه و تحلیل</li>
                            <li>24/7 پشتیبانی</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">شروع به کار</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricingTable">
                    <div class="pricing-icon">
                        <i class="icofont-globe"></i>
                    </div>
                    <div class="price-Value">
                        <span class="currency">هزار تومان</span>15
                    </div>
                    <span class="month">/ماه</span>
                    <div class="pricingHeader">
                        <h3 class="title">شرکتی</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li class="active">5 ارسال فاکتورها و نقل</li>
                            <li class="active">2 مشتری و محصولات</li>
                            <li class="active">صورتحساب و پرداخت</li>
                            <li class="active">وارد کردن 5 صورتحساب</li>
                            <li class="active">امنیت اطلاعات و پشتیبان گیری</li>
                            <li class="active">حساب کارکنان فضای مجاز: نامحدود</li>
                            <li class="active">وب رزرو ویجت</li>
                            <li>گزارشات ماهانه و تجزیه و تحلیل</li>
                            <li>24/7 پشتیبانی</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">شروع به کار</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="pricingTable">
                    <div class="pricing-icon">
                        <i class="icofont-globe"></i>
                    </div>
                    <div class="price-Value">
                        <span class="currency">هزار تومان</span>15
                    </div>
                    <span class="month">/ماه</span>
                    <div class="pricingHeader">
                        <h3 class="title">سرمایه گذاری</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li class="active">5 ارسال فاکتورها و نقل</li>
                            <li class="active">2 مشتری و محصولات</li>
                            <li class="active">صورتحساب و پرداخت</li>
                            <li class="active">وارد کردن 5 صورتحساب</li>
                            <li class="active">امنیت اطلاعات و پشتیبان گیری</li>
                            <li class="active">حساب کارکنان فضای مجاز: نامحدود</li>
                            <li class="active">وب رزرو ویجت</li>
                            <li class="active">گزارشات ماهانه و تجزیه و تحلیل</li>
                            <li class="active">24/7 پشتیبانی</li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary">شروع به کار</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->

<!-- Start شروع به کار Area -->
<section class="get-started ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>شروع به کار رایگان</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="get-started-form">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="نام">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="ایمیل">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="رمز عبور">
                </div>
                <button type="submit" class="btn btn-primary">ثبت نام کردن</button>
                <p>و یا استفاده شما <a href="#">از حساب فیس بوک</a></p>
            </form>
        </div>
    </div>

    <canvas id="canvas"></canvas>
</section>
<!-- End شروع به کار Area -->

<!-- Start Feedback Area -->
<section class="feedback-area ptb-100 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>مشتریان</h2>
            <div class="bar"></div>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="row">
            <div class="feedback-slides">
                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="/ClientCss/assets/img/client1.jpg" alt="client">
                            <h3>آلین</h3>
                            <span>توسعه دهنده وب</span>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="/ClientCss/assets/img/client2.jpg" alt="client">
                            <h3>آلان اسمیت</h3>
                            <span>سئو</span>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="/ClientCss/assets/img/client3.jpg" alt="client">
                            <h3>استیون</h3>
                            <span>توسعه دهنده وب</span>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="/ClientCss/assets/img/client4.jpg" alt="client">
                            <h3>داوید لوئیز</h3>
                            <span>توسعه دهنده وب</span>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg class="svg-feedback-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff"/>
    </svg>
</section>
<!-- End Feedback Area -->

<!-- Start Partner Area -->
<div class="partner-area">
    <div class="container">
        <div class="row">
            <div class="partner-slides">
                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-1.png" alt="partner"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-2.png" alt="partner"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-3.png" alt="partner"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-4.png" alt="partner"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-5.png" alt="partner"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-6.png" alt="partner"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="item">
                        <a href="#"><img src="/ClientCss/assets/img/partner-7.png" alt="partner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->
@endsection