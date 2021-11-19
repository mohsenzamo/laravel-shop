<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="{{route('IndexAdminViewRoute')}}"><img class="brand-logo" alt="creaative admin logo" src="/AdminCss/app-assets/images/logo/logo.png">
                    <h3 class="brand-text">آفتاب پرست</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">مگا</a>
                        <ul class="mega-dropdown-menu dropdown-menu row">
                            <li class="col-md-2">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-link"></i> لینک های سریع</h6>
                                <ul>
                                    <li><a class="my-1" href="gap-application.html"><i class="ft-home"></i> چت</a></li>
                                    <li><a class="my-1" href="table-bootstrap.html"><i class="ft-grid"></i> جداول</a></li>
                                    <li><a class="my-1" href="chartist-charts.html"><i class="ft-bar-chart"></i> نمودار</a></li>
                                    <li><a class="my-1" href="gallery-grid.html"><i class="ft-sidebar"></i> گالری</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-star"></i> نشانک های من</h6>
                                <ul class="ml-2">
                                    <li class="list-style-circle"><a class="my-1" href="card-bootstrap.html">
                                            کارت ها</a></li>
                                    <li class="list-style-circle"><a class="my-1" href="full-calender.html"> تقویم</a></li>
                                    <li class="list-style-circle"><a class="my-1" href="invoice-template.html"> صورتحساب</a></li>
                                    <li class="list-style-circle"><a class="my-1" href="users-contacts.html"> تماس</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="dropdown-menu-header text-uppercase"><i class="ft-layers"></i> محصولات اخیر</h6>
                                <div class="carousel slide pt-1" id="carousel-example" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"><img class="d-block w-100" src="/AdminCss/app-assets/images/carousel/08.jpg" alt="First slide"></div>
                                        <div class="carousel-item"><img class="d-block w-100" src="/AdminCss/app-assets/images/carousel/03.jpg" alt="Second slide"></div>
                                        <div class="carousel-item"><img class="d-block w-100" src="/AdminCss/app-assets/images/carousel/01.jpg" alt="Third slide"></div>
                                    </div><a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev"><span class="la la-angle-left" aria-hidden="true"></span><span class="sr-only">قبلی</span></a><a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next"><span class="la la-angle-right icon-next" aria-hidden="true"></span><span class="sr-only">بعدی</span></a>
                                    <h5 class="pt-1">عنوان ویژه</h5>
                                    <p>لوبیا سبز آلو قارچ.</p>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i> در تماس باشید</h6>
                                <form class="form form-horizontal pt-1">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputName1">نام</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" id="inputName1" type="text" placeholder="برات هادیان">
                                                    <div class="form-control-position pl-1"><i class="ft-user"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputContact1">تماس</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" id="inputContact1" type="text" placeholder="(123)-456-7890">
                                                    <div class="form-control-position pl-1"><i class="ft-smartphone"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputEmail1">ایمیل</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" id="inputEmail1" type="email" placeholder="john@example.com">
                                                    <div class="form-control-position pl-1"><i class="ft-mail"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputMessage1">پیام</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <textarea class="form-control" id="inputMessage1" rows="2" placeholder="متن ساده"></textarea>
                                                    <div class="form-control-position pl-1"><i class="ft-message-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-1">
                                                <button class="btn btn-danger float-right" type="button"><i class="ft-arrow-right"></i> ثبت کن</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown">
                            برنامه ها</a>
                        <div class="dropdown-menu">
                            <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i class="ft-user"></i> ایمیل</a><a class="dropdown-item" href="gap-application.html"><i class="ft-mail"></i> چت</a><a class="dropdown-item" href="project-summary.html"><i class="ft-briefcase"></i> خلاصه ی پروژه            </a><a class="dropdown-item" href="full-calender.html"><i class="ft-calendar"></i> تقویم            </a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                        <ul class="dropdown-menu">
                            <li class="arrow_box">
                                <form>
                                    <div class="input-group search-box">
                                        <div class="position-relative has-icon-right full-width">
                                            <input class="form-control" id="search" type="text" placeholder="جستجو در اینجا ...">
                                            <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-up badge-glow">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">اطلاعیه</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-share info font-medium-4 mt-2"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading info">سفارش جدید دریافت شده</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است!</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:30 صبح</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-save font-medium-4 mt-2 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading warning">کاربر جدید ثبت شده است</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10:05 عصر</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-repeat font-medium-4 mt-2 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading danger">خرید جدید</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">دیروز</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-shopping-cart font-medium-4 mt-2 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading primary">مورد جدید در سبد خرید شما</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">هفته گذشته</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-heart font-medium-4 mt-2 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading info">فروش جدید</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">ماه گذشته</time></small>
                                            </div>
                                        </div></a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item info text-right pr-1" href="javascript:void(0)">خواندن همه</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">پیام ها</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="/AdminCss/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">سارا مونتری<i class="ft-circle font-small-2 success float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">همه چیز خوب است من ارائه خواهم داد...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:55 صبح</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><span class="media-object rounded-circle text-circle bg-warning">E</span></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">الیزا الیوت<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">باشه. در اینجا برخی از جزئیات بیشتر است...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">2:10 عصر</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="/AdminCss/app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">کلی رییس<i class="ft-circle font-small-2 warning float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">یک بار چک کنید و به من اطلاع دهید...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">دیروز</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="/AdminCss/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">تونی دیپ<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">ما شروع به توسعه پروژه جدید خواهیم کرد...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">جمعه</time></small>
                                            </div>
                                        </div></a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-right info pr-1" href="javascript:void(0)">خواندن همه</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="/AdminCss/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="/AdminCss/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">برات هادیان</span></span></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> ویرایش مشخصات</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> صندوق ورودی من</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> وظیفه</a><a class="dropdown-item" href="gap-application.html"><i class="ft-message-square"></i> نمودار</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="ft-power"></i> خروج</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>