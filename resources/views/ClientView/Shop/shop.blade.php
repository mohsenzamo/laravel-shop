@extends('ClientView/Master/total')
@section('content')

    <!-- Start Search Box -->
    <div id="header-search" class="header-search">
        <button type="button" class="close">×</button>
        <form class="header-search-form">
            <input type="search" value="" placeholder="همینجا تایپ کنید........"/>
            <button type="submit" class="btn btn-primary">جستجو</button>
        </form>
    </div>
    <!-- End Search Box -->

    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>آخرین محصول ما</h2>
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

    <!-- Start Product Area -->
    <section class="product-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="woocommerce-topbar">
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="col-lg-9 col-md-7">
                                <div class="woocommerce-result-count">
                                    <p>نمایش 1-9 از 11 نتیجه</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5">
                                <div class="woocommerce-topbar-ordering">
                                    <form>
                                        <div class="select-box">
                                            <select class="form-control">
                                                <option value="1">مرتب سازی بر اساس محبوبیت</option>
                                                <option value="2">بر اساس میانگین امتیاز</option>
                                                <option value="0">بر اساس قدیمی ترین</option>
                                                <option value="3">بر اساس قیمت از کم به زیاد</option>
                                                <option value="4">بر اساس قیمت از زیاد به کم</option>
                                                <option value="5">بر اساس جدیدترین</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($productitem as $item)

                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img-slides">
                                <div class="product-img">
                                    <a href="#"><img src="{{$item->ImageAddress_1}}" alt="product-img"></a>
                                    <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                                class="icofont-shopping-cart"></i></a>
                                </div>

                                <div class="product-img">
                                    <a href="#"><img src="{{$item->ImageAddress_2}}" alt="product-img"></a>
                                    <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                                class="icofont-shopping-cart"></i></a>
                                </div>

                                <div class="product-img">
                                    <a href="#"><img src="{{$item->ImageAddress_3}}" alt="product-img"></a>
                                    <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                                class="icofont-shopping-cart"></i></a>
                                </div>

                                <div class="product-img">
                                    <a href="#"><img src="{{$item->ImageAddress_4}}" alt="product-img"></a>
                                    <a href="#" class="add-to-cart-btn">افزودن به سبد خرید <i
                                                class="icofont-shopping-cart"></i></a>
                                </div>

                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="#">{{$item->Name}}</a>
                                </h3>
                                <div class="row h-100 justify-content-center align-items-center">
                                    <div class="col-lg-5">
                                        <h5>{{$item->Price}}</h5>
                                    </div>

                                    <div class="col-lg-7">
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">

                                <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-left"></i></a>
                                </li>

                                <li class="page-item active"><a class="page-link" href="#">1</a></li>

                                <li class="page-item"><a class="page-link" href="#">2</a></li>

                                <li class="page-item"><a class="page-link" href="#">3</a></li>

                                <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Area -->
@endsection