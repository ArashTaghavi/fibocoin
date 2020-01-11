<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>فیبوکوین</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="خرید و فروش ارز دیجیتال | فیبوکوین">
    <meta name="keywords" content="ارز دیجیتال، بیت کوین، اتریوم، فیبوکوین">
    <meta name="author" content="Arash Taghavi">


    <link rel="shortcut icon" type="image/x-icon" href="/site-assets/images/fav-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- Bootstrap css -->
    <link href="/site-assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/site-assets/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!--Font Awesome css -->
    <link href="/site-assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Site css -->
    <link href="/site-assets/css/swiper.css" rel="stylesheet">
    <link href="/site-assets/css/YouTubePopUp.css" rel="stylesheet">
    <link rel="stylesheet" href="/site-assets/css/animated-headlines.css">
    <link rel="stylesheet" href="/site-assets/css/shortcode/shortcodes.css">
    <!-- Site css -->
    <link href="/site-assets/css/main.css" rel="stylesheet">
    <link href="/site-assets/css/rtl.css" rel="stylesheet">

    <!-- Responsive css -->
    <link href="/site-assets/css/responsive.css" rel="stylesheet">
    <link href="/site-assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="/site-assets/css/custom.css" rel="stylesheet">
    <style>

        #questions a:hover {
            color: initial !important;
        }

        .prices td, .prices th {
            text-align: center !important;
        }

    </style>
    <style>
        html, body {
            position: relative;
            height: 100%;
            background: #eee !important;
        }

        .swiper-wrapper img, video {
            border-radius: 20px;
        }


        video {
            width: 100%;
        }

        #feature .col-sm-6 p {
            height: 120px;
            overflow: auto;
        }
    </style>
</head>

<body id="home">

<!-- Preloader starts-->
<div id="loading">
    <div class="load-circle">
        <img src="/site-assets/images/logo.png" width="150px" alt="logo">
    </div>
</div>
<!-- Preloader ends -->

<!-- Navigation area starts -->
<div class="menu-area navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">

            <!-- Navigation starts -->
            <div class="col-md-12">
                <div class="mainmenu">
                    <div class="navbar navbar-nobg">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-left">
                                    <li><a class="smooth_scroll" href="#price"> بازار</a></li>
                                    <li><a class="smooth_scroll" href="#orders">سفارشات</a></li>
                                    <li><a class="smooth_scroll" href="#feature">بلاگ</a></li>
                                    <li><a class="smooth_scroll" href="/questions">ماشین حساب</a></li>
                                    <li><a class="why-fibocoin" href="/why-fibocoin">چرا فیبوکوین</a></li>
                                    <li><a class="smooth_scroll" href="#contact">پشتیبانی</a></li>
                                    <li><a href="/questions">سوالات متداول</a></li>
                                    {{--      @if(!Auth::check())
                                              <li><a style="display:inline-block" href="/login">ورود / </a><a style="display:inline-block" href="/register">ثبت نام</a></li>
                                          @else
                                              <li>
                                                  <a href={{$panel_address}}>پنل کاربری</a>
                                              </li>
                                          @endif--}}
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li id="app-qrcode">
                                        <a href="" style="position: absolute;top: -18px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"
                                                 class="dp-dl">
                                                <path d="M170.666667 42.666667v938.666666h682.666666V42.666667z m597.333333 853.333333H256V128h512z"></path>
                                                <path d="M397.653333 741.12h228.693334v74.666667H397.653333zM693.333333 489.386667L512 670.72l-181.333333-181.333333 51.626666-51.626667 93.013334 101.12V208.213333h73.386666v330.666667l93.013334-101.12 51.626666 51.626667z"></path>
                                            </svg>
                                        </a>
                                        <div id="qrcode-box">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="/site-assets/images/qrcode.png" alt="qrcode">
                                                </div>
                                                <div class="col-md-6">
                                                    <p>App Store</p>
                                                    <p>Google Play</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @if(!Auth::check())
                                        <li>
                                            <a href="/register">
                                                <button class="register-btn">Register</button>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/login">LogIn</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{$panel_address}}">
                                                <button class="register-btn">پنل کاربری</button>
                                            </a>
                                        </li>
                                    @endif
                                    <li style="padding-left: 0">
                                        <a href="/">
                                            <img src="/site-assets/images/logo.png" width="148px" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Navigation ends -->

        </div>
    </div>
</div>
<!-- Navigation area ends -->

@yield('content')

<!-- Contact  area Start -->
<section id="footer" class="section-big hidden-xs footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <a href="">خدمات</a>
            </div>
            <div class="col-sm-2">
                <a href="">آموزش</a>
            </div>
            <div class="col-sm-2">
                <a href="#" data-toggle="modal" data-target="#terms">قوانین و مقررات</a>
                <div class="modal" id="terms" style="z-index:9999999">
                    <div class="modal-dialog modal-xl" style="x-index:9999999">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">قوانین و مقررات</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" style="font-size:12px;line-height:30px;color:#3c3c3c !important;">
                                <p>تمامی فعالیت های سامانه «فیبوکوین» تابع قوانین جمهوری اسلامی ایران و تجارت
                                    الکترونیک می باشد. لازمه استفاده از خدمات سامانه «فیبوکوین» قبول قوانین آن بوده
                                    و تمام کاربران باید این قوانین را رعایت کنند.
                                </p>

                                <div style="font-size: 12px">
                                    <h5> قوانین خرید و فروش</h5>
                                    <hr>
                                    - «فیبوکوین» هیچ گونه دخالتی در تعیین قیمت ارزهای دیجیتال نداشته و قیمت توسط خود
                                    کاربران پیشنهاد می شود.
                                    <br>
                                    - قبل از انجام معامله تمام جوانب آن از جمله قیمت پیشنهادی را بررسی کرده و تنها
                                    پس از کسب اطمینان کامل اقدام به خرید یا فروش کنید، پس از پرداخت وجه و انتقال ارز
                                    دیجیتال، معامله نهایی تلقی شده و به هیچ عنوان امکان لغو آن وجود نخواهد داشت.
                                    <br>
                                    - ما به هیچ عنوان معاملاتی را که از روال معمول سامانه پیروی نکرده باشند و یا از
                                    طریق پرداخت ضمانت شده پرداخت را انجام نداده باشند ضمانت نمی کنیم و تمامی عواقب
                                    آن بر عهده خودتان خواهد بود.
                                    <br>
                                    - اگر فروشنده گزینه «بروز رسانی خودکار قیمت پیشنهادی، نسبت به قیمت جهانی» را
                                    انتخاب کند، قیمت ارز دیجیتالی که برای فروش ثبت کرده است به نسبت تغییر قیمت جهانی
                                    همان ارز تغییر خواهد کرد. این تغییرات تا لحظه ارسال درخواست خرید توسط خریدار و
                                    قبل از واریز وجه لحاظ خواهد شد و با تائید درخواست خرید توسط فروشنده قیمت نهایی
                                    شده و هر دو طرف معامله ملزم به پیروی از آن خواهند بود.
                                    <h5>قوانین احراز هویت و محرمانگی اطلاعات کاربران</h5>
                                    <hr>
                                    - تمامی کاربران ملزم به ارسال مدارک شناسایی مورد نیاز وتائید اطلاعات تماس مانند
                                    شماره همراه، ایمیل جهت احراز هویت هستند.
                                    <br>
                                    - تمامی مدارک ارسالی و سایر اطلاعات کاربران نزد سامانه «فیبوکوین» محفوظ بوده و
                                    به هیچ عنوان در اختیار شخص یا سازمان دیگری قرار نخواهد گرفت مگر با دستور قضایی و
                                    حکم دادگاه.
                                    <br>
                                    ـ استفاده از مدارک یا اطلاعات شخص دیگر جهت ثبت نام و هر گونه فعالیت در
                                    «فیبوکوین» ممنوع بوده و سامانه «فیبوکوین» این حق را برای خود محفوظ می دارد تا در
                                    صورت مشاهده آن مورد را از طریق مراجع قضایی پیگیری کند.
                                    <br>
                                    - هر گونه دستکاری و تغییر در مدارک ارسالی که با هدف گمراه کردن تیم پشتیبانی صورت
                                    بگیرد ممنوع بوده و سامانه «فیبوکوین» این حق را برای خود محفوظ می دارد تا در صورت
                                    مشاهده آن را از طریق مراجع قضایی پیگیری کند.
                                    <br>
                                    ـ «فیبوکوین» این حق را برای خود محفوظ می دارد بدون الزام به توضیح مدارک ارسالی
                                    جهت احراز هویت را رد کرده و احراز هویت کاربر را تائید نکند.
                                    <br>
                                    <b>قوانین مربوط به امور مالی</b>
                                    - تمامی تراکنش های مالی در سامانه «فیبوکوین» باید تنها از طریق حساب بانکی خود
                                    کاربر که قبلا در سامانه تاید شده است انجام گردد. در صورت استفاده از حساب بانکی
                                    شخصی دیگر و یا حساب بانکی تائید نشده اکانت کاربر مسدود شده و تمام عواقب آن بر
                                    عهده ایشان خواهد بود.
                                    <br>
                                    ـ تسویه حساب موجودی تنها به حساب بانکی ای که به نام خود کاربر بوده و قبلا در
                                    سامانه «فیبوکوین» ثبت و تائید شده باشد واریز خواهد شد.
                                    <br>
                                    - مسئولیت تاخیر که در اثر اختلالات احتمالی در شبکه بانکی یا پایا صورت پذیرد بر
                                    عهده «فیبوکوین» نخواهد بود.
                                    <br>
                                    ـ عواقب و مسئولیت ارائه اطلاعات بانکی نا صحیح بر عهده کاربر است.
                                    <h5>تغییرات</h5>
                                    <hr>
                                    «فیبوکوین» این حق را برای خود محفوظ می دارد که در صورت نیاز قوانین فعلی را تغییر
                                    داده و یا موارد جدید به آن اضافه کند. تغییرات احتمالی قوانین پس از اطلاع رسانی
                                    از طریق ایمیل و پنل کاربری به کاربران، برای تمامی افرادی که از خدمات این سامانه
                                    استفاده می کنند لازم الاجرا خواهد بود.
                                </div>
                            </div>


                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-2">
                <a href="">شبکه های اجتماعی</a>
                <p style="font-size:20px;margin-top: 10px">
                    <a href="https://instagram.com/fibocoin">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100045599123151">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://t.me/fibocoin">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </p>
            </div>
            <div class="col-sm-2" style="font-size:13px">
                <a href="" style="font-size: 16px">ارتباط با ما</a>
                <p>
                    <i class="fa fa-phone"></i>
                    تلفن : ٠٢١۲۲۳۲۱۱۴۹
                </p>
                <p>
                    <i class="fa fa-support"></i>
                    پشتیبانی تلگرام و واتس اپ: ۰۹۰۲۳۰۰۸۵۰۲
                </p>
            </div>
            <div class="col-sm-2">
                <li><a class="smooth_scroll" href="#about-us">درباره ما</a></li>
            </div>
        </div>
    </div>
</section>
<section id="footer-xs" class="section-big footer hidden-sm hidden-md hidden-lg hidden-xl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon glyphicon-minus">
                            </span>خدمات</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>آموزش</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>قوانین و مقررات</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>شبکه های اجتماعی</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p style="font-size:20px;margin-top: 10px">
                                    <a href="https://instagram.com/fibocoin">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="https://www.facebook.com/profile.php?id=100045599123151">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="https://t.me/fibocoin">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>شبکه های اجتماعی</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    <i class="fa fa-phone"></i>
                                    تلفن : ٠٢١۲۲۳۲۱۱۴۹
                                </p>
                                <p>
                                    <i class="fa fa-support"></i>
                                    پشتیبانی تلگرام و واتس اپ: ۰۹۰۲۳۰۰۸۵۰۲
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>درباره ما</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact  area end -->

<!-- copyright area starts -->

<!-- all js here -->
<script src="/site-assets/js/jquery-1.12.4.min.js"></script>

<!-- Bootstrap js-->
<script src="/site-assets/js/bootstrap.min.js"></script>

<!-- Owl Carousel js -->

<!-- Waypoint js -->
<script src="/site-assets/js/waypoints.js"></script>
<script src="/site-assets/js/counter.js"></script>
<script src="/site-assets/js/plugins.js"></script>
<!-- Ajax Mailchimp js -->
<script src="/site-assets/js/swiper.min.js"></script>
<script src="/site-assets/js/YouTubePopUp.jquery.js"></script>
<!-- Ajax Mailchimp js -->
<script src="/site-assets/js/jquery.ajaxchimp.min.js"></script>
<!-- swiper js -->
<!-- main js -->

<script src="/site-assets/js/jquery.dataTables.min.js"></script>
<script src="/site-assets/js/jquery.ajaxchimp.min.js"></script>

<script src="/site-assets/js/custom.js"></script>

<script>
    $(document).ready(function () {
        $('#footer-xs a').click(function () {
            var tag = $('#footer-xs a span');
            tag.removeClass('glyphicon-minus').addClass('glyphicon-plus');
            $(this).find('span').toggleClass('glyphicon-minus').toggleClass('glyphicon-plus');
        });
    });
</script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
<script>

    $('#expand').click(function () {
        $('.text-box').animate({width: 'toggle'}, 350);
        $('.video-box').toggleClass('col-md-5').toggleClass('col-md-10');
        $('.video-container').toggleClass('col-md-10').toggleClass('col-md-5');
        $('.slider-container').toggleClass('col-md-2').toggleClass('col-md-7');
        $(this).toggleClass('fa-arrow-right').toggleClass('fa-arrow-left');
    });
    $(document).ready(function () {
        for (i = 1; i < 100; i++) {
            $('#orders_table+i').DataTable({searching: false, paging: false, info: false});
        }
    });
</script>
@yield('end-script')
</body>

</html>
