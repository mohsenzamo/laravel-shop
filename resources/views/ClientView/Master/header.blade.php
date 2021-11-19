<header id="header">
    <div class="crake-mobile-nav">
        <div class="logo">
            <img src="/ClientCss/assets/img/logo.png" alt="">
        </div>
    </div>

    <div class="crake-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('IndexClientViewRoute')}}"><img src="/ClientCss/assets/img/logo.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarپشتیبانیedContent">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item"><a href="{{route('IndexClientViewRoute')}}" class="nav-link">خانه</a>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">صفحات</a>
                            <ul class="dropdown_menu">
                                <li class="nav-item"><a href="{{route('AboutUsViewRoute')}}" class="nav-link">درباره</a>
                                </li>

                                <li><a href="{{route('FeaturesViewRoute')}}">ویژگی ها</a></li>

                                <li><a href="{{route('ServicesViewRoute')}}">خدمات</a></li>

                                <li><a href="{{route('GalleryViewRoute')}}">گالری</a></li>

                                <li class="nav-item"><a href="{{route('TeamViewRoute')}}" class="nav-link">تیم</a>
                                </li>

                                <li class="nav-item"><a href="{{route('PricingViewRoute')}}" class="nav-link">قیمت</a>
                                </li>


                                <li><a href="{{route('LoginViewRoute')}}">ورود</a></li>
                                <li><a href="{{route('SingUpViewRoute')}}">ثبت نام</a></li>
                                <li><a href="{{route('ComingSoonViewRoute')}}">به زودی</a></li>
                                <li><a href="{{route('ErrorViewRoute')}}">404 خطای</a></li>
                                <li><a href="{{route('FaqViewRoute')}}">گفت و گو</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">نمونه کار</a>
                            <ul class="dropdown_menu">
                                <li><a href="{{route('ProjectViewRoute')}}">نمونه کارها</a></li>
                                <li><a href="{{route('SingleProjectViewRoute')}}">جزئیات نمونه کار</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">بلاگ</a>
                            <ul class="dropdown_menu">
                                <li><a href="{{route('BlogViewRoute')}}">بلاگ</a></li>
                                <li><a href="{{route('SingleBlogViewRoute')}}">جزئیات بلاگ</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">فروشگاه</a>
                            <ul class="dropdown_menu">
                                <li><a href="{{route('ShopViewRoute')}}">فروشگاه</a></li>
                                <li><a href="{{route('ShopDetailsViewRoute')}}">جزئیات فروشگاه</a></li>
                                <li><a href="{{route('CartViewRoute')}}">سبد خرید</a></li>
                                <li><a href="{{route('CheckOutViewRoute')}}">بررسی</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="{{route('ContactUsViewRoute')}}" class="nav-link">تماس</a></li>
                    </ul>
                </div>
                <div class="mr-auto others-option">
                    <ul class="navbar-nav">
                        <li class="nav-item cart-wrapper">
                            <a href="#">
                                <i class="icofont-shopping-cart cart-icon"></i>

                                <span>0</span>
                            </a>
                        </li>
                        <li class="header-search-box">
                            <a href="#header-search" title="Search">
                                <i class="icofont-search-2"></i>
                            </a>
                        </li>
                        <li data-toggle="modal" data-target="#myModal2">
                            <div class="side-menu">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>