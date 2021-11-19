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
                <h2>گفت و گو</h2>
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

<!-- Start FAQ Area -->
<section class="faq-area ptb-100">
    <div class="container">
        <div class="faq-accordion">
            <ul class="accordion">
                <li class="accordion-item">
                    <a class="accordion-title active" href="javascript:void(0)">چگونه مجوزها در اینسنت از طریق گوگل پلی کار می کنند؟</a>
                    <p class="accordion-content show">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">قفل هوشمند برای برنامه های فوری مورد نیاز است؟</a>
                    <p class="accordion-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">آیا می توانم فعالیت های متعددی در یک ویژگی واحد داشته باشم؟</a>
                    <p class="accordion-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">آیا می توانم منابع بین ویژگی ها را به اشتراک بگذارم؟؟</a>
                    <p class="accordion-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">آیا مولتی تکس برای برنامه های فوری پشتیبانی می شود؟</a>
                    <p class="accordion-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </li>

                <li class="accordion-item">
                    <a class="accordion-title" href="javascript:void(0)">آیا می توانم منابع بین ویژگی ها را به اشتراک بگذارم؟</a>
                    <p class="accordion-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                </li>
            </ul>
        </div>

        <div class="faq-contact">
            <h3>سوال خود را از ما بپرسید</h3>
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="نام" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="ایمیل" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="text" placeholder="موضوع" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="6" placeholder="پیام" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button class="btn btn-primary" type="submit">هم اکنون ارسال کن!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End FAQ Area -->

@endsection