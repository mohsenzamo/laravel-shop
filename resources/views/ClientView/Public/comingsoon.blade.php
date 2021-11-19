@extends('ClientView/Master/total')
@section('content')
<!-- Start Coming Soon Area -->
<section class="coming-soon">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="coming-soon-content">
                    <h1>ما مشغول راه اندازی سایت جدید هستیم</h1>
                    <p>کار سختی برای چیزی که ما به آن اهمیت نمی دهیم استرس نامیده می شود. اشتیاق فراوانی به ما می کند که دوستمان داریم.</p>

                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>

                    <form>
                        <input type="text" class="form-control" placeholder="آدرس ایمیل خود را تایپ کنید">
                        <button type="submit">مشترک شدن</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Coming Soon Area -->

@endsection