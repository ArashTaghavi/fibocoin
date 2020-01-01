<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>بیت کوین</title>
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
    <!-- Owl Carousel css -->
    <link href="/site-assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/site-assets/css/owl.carousel.min.css" rel="stylesheet">
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
    <link href="/site-assets/css/custom.css" rel="stylesheet">
    <style>
        #questions a:hover {
            color: initial !important;
        }

        .prices td, .prices th {
            text-align: center !important;
        }

        .prices_container {
            height: 400px;
            overflow: auto;
        }
    </style>
    <style>
        html, body {
            position: relative;
            height: 100%;
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
    <div class="load-circle"><span class="one"></span></div>
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
                                    <li><a class="smooth_scroll" href="#about-us">سفارشات</a></li>
                                    <li><a class="smooth_scroll" href="#feature">بلاگ</a></li>
                                    <li><a class="smooth_scroll" href="#questions">ماشین حساب</a></li>
                                    <li><a href="/blog">چرا فیبوکوین</a></li>
                                    <li><a class="smooth_scroll" href="#contact">پشتیبانی</a></li>
                                    <li><a class="smooth_scroll" href="#contact">سوالات متداول</a></li>
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
                                                    <p>Android</p>
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
                                        <a href="">
                                            <img src="/site-assets/images/logo.png" width="100px" alt="">
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

<!-- Slider Area Start -->
<div class="background-area" id="slider-bg">
    <div class="slider-full-carousel owl-carousel">
        <div class="single-carousel">
            <div class="banner-content ">
                <div class="container">
                    <div class="background-content">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 text-box">
                                <div class="text-content-wrapper slider">
                                    <div class="hero-text">
                                        <h1 class="title2 cd-headline clip is-full-width">بازار معاملاتی ارزهای
                                            دیجیتال<br><br>
                                            <span class="cd-words-wrapper">
														<b class="is-visible">خرید و فروش امن</b>
														<b>پشتیبانی شبانه روزی</b>
														<b>سرعت بالا</b>
													</span>
                                        </h1>
                                        <p>
                                            با خرید و فروش ارز در سایت بیت کوین، دغدغه های امنیتی و وصول نقدینگی را
                                            نخواهید داشت.
                                        </p>
                                        <div class="row">
                                            <a href="/site-assets/#" class="bnc-btn" style="display:inline-block">درخواست
                                                خرید</a>
                                            <a href="/site-assets/#" class="bnc-btn" style="display:inline-block">درخواست
                                                فروش</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 video-box" style="margin-top:7%">
                                <div class="row">
                                    <div class="col-md-10 video-container">
                                        <video src="https://as2.cdn.asset.aparat.com/aparat-video/de088529cd9e3d87bb58b7f8a239b49a18539284-144p__74885.mp4"
                                               autoplay>

                                        </video>
                                    </div>
                                    <div class="col-md-2 slider-container">
                                        <!-- Swiper -->
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="/site-assets/images/slide1.jpg" style="width:100%" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/site-assets/images/slide2.jpg" style="width:100%" alt="">

                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/site-assets/images/slide3.jpg" style="width:100%" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/site-assets/images/slide3.jpg" style="width:100%" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="/site-assets/images/slide3.jpg" style="width:100%" alt="">
                                                </div>
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left">
                                        <i id="expand" class="fa fa-arrow-right text-white"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="single-carousel" style="background-image: url('/site-assets/images/banner-still.jpg');">
            <div class="banner-content ">
                <div class="container">
                    <div class="background-content">
                        <div class="banner-image hand bnr-sm-none">
                            <div class="watch">
                                <img src="/site-assets/images/home-2-slider-2.png" class="img-responsive" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="text-content-wrapper slider">
                                    <div class="hero-text">
                                        <h1 class="title2 cd-headline clip is-full-width">بازار معاملاتی ارزهای
                                            دیجیتال<br><br>
                                            <span class="cd-words-wrapper">
                          <b class="is-visible">خرید و فروش امن</b>
                          <b>پشتیبانی شبانه روزی</b>

                          <b>سرعت بالا</b>
                        </span>
                                        </h1>
                                        <p> با خرید و فروش ارز در سایت بیت کوین، دغدغه های امنیتی و وصول نقدینگی را
                                            نخواهید داشت.
                                        </p>
                                        <a href="/site-assets/#" class="hero-btn">دانلود اپلیکیشن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-carousel" style="background-image: url('/site-assets/images/banner-still.jpg');">
            <div class="banner-content ">
                <div class="container">
                    <div class="background-content">
                        <div class="banner-image hand bnr-sm-none">
                            <div class="watch">
                                <img src="/site-assets/images/home-2-slider-3.png" class="img-responsive" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="text-content-wrapper slider">
                                    <div class="hero-text">
                                        <h1 class="title2 cd-headline clip is-full-width">
                                            بازار معاملاتی ارز های دیجیتال
                                            <br><br>
                                            <span class="cd-words-wrapper">
                          <b class="is-visible">خرید و فروش امن</b>
                          <b>پشتیبانی شبانه روزی</b>
                          <b>سرعت بالا</b>
                        </span>
                                        </h1>
                                        <p> با خرید و فروش ارز در سایت بیت کوین، دغدغه های امنیتی و وصول نقدینگی را
                                            نخواهید داشت.
                                        </p>
                                        <a href="/site-assets/#" class="hero-btn">دانلود</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End -->

<style>
    #price {
        background: #f5f9fc;
    }

    #price table {
        box-shadow: rgba(0, 0, 0, 0.06) 0px 0px 40px;
        background: #fff;
    }

    #price table th {
        color: rgb(132, 142, 156)
    }
</style>

<!-- Price -->
<section id="price" class="section-big">
    <div class="container">
        <div class="section-title">
            <h2>مارکت</h2>

        </div>
        <div class="row">
            <div class="prices_container col-md-12">
                <table class="table table-responsive prices">
                    <thead>
                    <tr>
                        <th>نام ارز</th>
                        <th>آخرین قیمت</th>
                        <th>تغییرات 24 ساعت اخیر</th>
                        <th>بازار</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prices as $price)
                        <tr>
                            <td>{{$price['symbol']}} <span class="text-muted">{{$price['name']}}</span></td>
                            <td>{{number_format($price['quote']['USD']['price'],2)}} $</td>
                            <td dir="ltr">
                                @if($price['quote']['USD']['percent_change_24h']<0)
                                    <span style="color:red;"> {{number_format($price['quote']['USD']['percent_change_24h'],2)}} %</span>
                                @else
                                    <span> {{number_format($price['quote']['USD']['percent_change_24h'],2)}} %</span>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<!-- Price -->

<!-- feature area starts -->
<section id="feature" class="feature-area section-big">
    <div class="container">
        <div class="row">
            <!-- section-title -->
            <div class="section-title">
                <h2>جدول خرید و فروش ارزهای دیجیتال کاربران فیبوکوین</h2>
            </div>
        </div>

        <div class="row feature-inner about-content">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>نام کاربری</th>
                    <th>نوع ارز</th>
                    <th>موجودی</th>
                    <th>حداقل فروش</th>
                    <th>قیمت یک واحد</th>
                    <th>تاریخ ثبت</th>
                    <th>خرید</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cu as $c)
                    <tr>
                        <td>{{$c->user->mobile}}</td>
                        <td>{{$c->currency->title}} ({{$c->currency->symbol}})</td>
                        <td>{{number_format($c->balance)}}</td>
                        <td>{{number_format($c->min_sale)}}</td>
                        <td>{{number_format($c->unit_price)}}</td>
                        <td>{{jdate($c->created_at)}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">خرید</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- About area Start -->
<section id="about-us" class="about section-big">
    <div class="container">
        <div class="section-title">
            <h2>درباره ی <span>فیبوکوین</span></h2>
        </div>
        <div class="row about-content">
            <div class="col-md-7 col-xs-12 col-sm-6 row-image">
                <div class="about-img">
                    <video src="https://as2.cdn.asset.aparat.com/aparat-video/de088529cd9e3d87bb58b7f8a239b49a18539284-144p__74885.mp4"
                           autoplay></video>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 col-sm-6 row-text">
                <div class="common-pera about-text">
                    <div class="common-pera about-span">
                        <p style="color:#3c3c3c !important;">
                            اکسچنج غیرمتمرکز بیت کوین ایران نسخه اولیه ای از پروژه ای بلند مدت و با قابلیت هایی فراتر از
                            یک پلتفرم خرید و فروش ساده است؛ تیم بیت کوین ایران بصورت مداوم با آپدیت های نرم افزاری در
                            راستای رسیدن به این مهم قدم بر میدارد و امیدواریم قادر به ایجاد یک پلتفرم غیرمتمرکز جامع در
                            سطح بین المللی و برای استفاده تمام کاربران باشیم.
                        </p>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
</section>
<!-- About area end -->

<!-- feature area starts -->
<section id="feature" class="feature-area section-big">
    <div class="container">

        <div class="row">
            <!-- section-title -->
            <div class="section-title">
                <h2>ویژگی های <span>فیبوکوین</span></h2>
            </div>
        </div>

        <div class="row feature-inner about-content">

            <div class="col-md-12 col-sm-12">
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/clean-design-.png" alt="">
                            </div>
                        </div>
                        <h3>تنوع ارزهای پشتیبانی شده
                        </h3>
                        <p>
                            شبکه بیت کوین ایران از تکنولوژی جدیدی تحت عنوان "اینترنت بلاکچین ها" در هسته خود استفاده می
                            کند که امکان پشتیبانی از تعداد بیشماری رمزارز را برای شبکه بیت کوین ایران فراهم می سازد.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/retina-ready.png" alt="">
                            </div>
                        </div>
                        <h3>کیف پول امن</h3>
                        <p>
                            دارایی های کاربر در یک کیف پول امن در بلاکچین بیت کوین ایران ذخیره می شوند که به دلیل
                            استفاده از بلاکچین در زیرساخت بیت کوین ایران دسترسی به این داده ها برای اشخاص ثالت(سوم شخص)
                            غیر ممکن می باشد.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/pixel-perfect.png" alt="">
                            </div>
                        </div>
                        <h3>کنترل بر دارایی</h3>
                        <p>
                            کیف پول کاربر فقط با عبارت seed که فقط در اختیار خود کاربر قرار داده شده است قابل استفاده
                            است و در صورت نگهداری صحیح از این عبارت حتی مدیریت بیت کوین ایرام نیز به دارایی های کاربر
                            دسترسی نخواهند داشت.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/responsive.png" alt="">
                            </div>
                        </div>
                        <h3>انتقال داخلی</h3>
                        <p>
                            امکان انتقال موجودی بدون کسر کارمزد و بصورت آنی بین کاربران بیت کوین ایران یکی دیگر از
                            مزایای استفاده از "اینترنت بلاکچین ها" در شبکه بیت کوین ایران می باشد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- feature area starts -->
<section id="feature" class="feature-area section-big">
    <div class="container">

        <div class="row">
            <!-- section-title -->
            <div class="section-title">
                <h2>Get in touch. Stay in touch.
                </h2>
            </div>
        </div>

        <div class="row feature-inner about-content">

            <div class="col-md-12 col-sm-12">
                <div class="col-md-3">
                    <img src="/site-assets/images/support.svg" alt="support">
                    <h4 style="color:#000;padding: 5px">پیشتبانی 24 ساعته</h4>
                    <p style="color:#3c3c3c;padding: 5px">متن مورد نظر اینجا قرار میگیرد.</p>
                </div>
                <div class="col-md-3">
                    <img src="/site-assets/images/blog.svg" alt="blog">
                    <h4 style="color:#000;padding: 5px">بلاگ فیبوکوین</h4>
                    <p style="color:#3c3c3c;padding: 5px">متن مورد نظر اینجا قرار میگیرد.</p>
                </div>
                <div class="col-md-3">
                    <img src="/site-assets/images/community.svg" alt="community">
                    <h4 style="color:#000;padding: 5px">انجمن</h4>
                    <p style="color:#3c3c3c;padding: 5px">متن مورد نظر اینجا قرار میگیرد.</p>
                </div>
                <div class="col-md-3">
                    <img src="/site-assets/images/join-us.svg" alt="join-us">
                    <h4 style="color:#000;padding: 5px">پیشتبانی 24 ساعته</h4>
                    <p style="color:#3c3c3c;padding: 5px">متن مورد نظر اینجا قرار میگیرد.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- Questions -->
<section id="questions" style="background: #f5f9fc" class="feature-area section-big">
    <div class="container">
        <div class="section-title">
            <h2>سوالات متداول</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon glyphicon-minus">
                            </span>آیا میتوانیم در اندروید استفاده کنیم؟</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                                    تایپ به پایان رسد .</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>چگونه برنامه را دریافت کنیم؟</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon-plus">
                            </span>آیا پشتیبانی آنلاین وجود دارد؟</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    آیا برای استفاده نیاز به خرید لایسنس است؟
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- Questions -->

<!-- Contact  area Start -->
<section id="contact" class="our-contact section-big">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>با ما در <span>ارتباط </span>باشید</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6 contact-img">
                <img src="/site-assets/images/contact-mobile.png" class="img-responsive con-phone" alt="img">
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="contact-form form3">
                    <div id="form-messages"></div>
                    <form id="contact-form" action="http://demo.jamalgh.ir/appto/demo/php/contact.php" method="post">
                        <input name="name" type="text" required placeholder="نام شما:">
                        <input name="email" type="email" required placeholder="ایمیل:">

                        <textarea name="message" required id="message" cols="30" rows="10"
                                  placeholder="متن پیام :"></textarea>
                        <div class="store-buttons text-center">
                            <button type="submit" class='bttn-default' name="submit" value="ارسال">ارسال</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sub-contact" class="section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-logo">
                    <img src="/site-assets/images/logo.png" class="img-responsive" alt="img">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="text-icon-box">
                        <div class="box-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4>تماس با ما</h4>
                        <p>+009 123 456 789</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-xs-12">
                    <div class="text-icon-box">
                        <div class="box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h4>مکان</h4>
                        <p>ایران - تهران - خیابان انقلاب</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-xs-12">
                    <div class="text-icon-box">
                        <div class="box-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h4>ایمیل</h4>
                        <p>appt@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                <div class="cont-icon">
                    <h4>ما را دنبال کنید</h4>
                    <ul>
                        <li><a href="/site-assets/#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact  area end -->

<!-- copyright area starts -->
<footer class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="copyright-text text-center">
                    <p>کپی رایت &copy; 2020. تمامی حقوق محفوط است</p>
                </div>
            </div>
            <a class="smooth_scroll" href="/site-assets/#home" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
</footer>
<!-- copyright area ends -->

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
<script src="/site-assets/js/custom.js"></script>

<script>
    $(document).ready(function () {
        $('#questions a').click(function () {
            var tag = $('#questions a span');
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

</script>
</body>

</html>

