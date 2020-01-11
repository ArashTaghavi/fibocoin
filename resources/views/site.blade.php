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
                                    <li><a class="smooth_scroll" href="#questions">ماشین حساب</a></li>
                                    <li><a class="smooth_scroll" href="#why-fibocoin">چرا فیبوکوین</a></li>
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

<!-- Slider Area Start -->
<div class="background-area" id="slider-bg">
    <div class="slider-full-carousel owl-carousel">
        <div class="single-carousel">
            <div class="banner-content ">
                <div class="container toggle-container">
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
                                                    <img src="/site-assets/images/slide1.jpg" style="width:91%" alt="">
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


    #price table {
        box-shadow: rgba(0, 0, 0, 0.06) 0px 0px 40px;
        background: #fff;
    }

    #price table th {
        color: rgb(132, 142, 156)
    }
</style>

<!-- Price -->
<section id="price" class="section-big" style="background: #f9f9f9 !important;">
    <div class="container">
        <div class="section-title">
            <h2 class="title-class">مارکت</h2>

        </div>
        <div class="row">
            <div class="prices_container col-md-12">
                <table class="table table-responsive prices w-100 table-striped">
                    <thead>
                    <tr>
                        <th class="w-50 pr-2" style="text-align: right !important;">نام ارز</th>
                        <th>آخرین قیمت</th>
                        <th>تغییرات 24 ساعت اخیر</th>
                        <th>بازار</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prices as $price)
                        <tr>
                            <td style="text-align: right !important" class="pr-2">{{$price['symbol']}} <span
                                        class="text-muted">{{$price['name']}}</span></td>
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
                    <tr>
                        <td colspan="4" class="text-center">
                            <h5>مشاهده همه بازار ها</h5>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<!-- Price -->

<!-- orders area starts -->
<section id="orders" class="feature-area section-big" style="background: #eee !important;">
    <div class="container">
        <div class="row">
            <!-- section-title -->
            <div class="section-title">
                <h2 class="title-class">سفارشات فعال</h2>
            </div>
        </div>

        <div class="row feature-inner about-content">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                @foreach ($currencies as $currency)

                    <li class="nav-item {{$loop->first ? "active" : ""}}">
                        <a class="nav-link" data-toggle="tab"
                           href="#tab{{$loop->iteration}}">{{$currency->title}}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @foreach ($currencies as $currency)
                    <div class="tab-pane container {{$loop->first ? "active" : ""}}" id="tab{{$loop->iteration}}">
                        <table class="table table-responsive" id="orders_table{{$loop->iteration}}">
                            <thead>
                            <tr>
                                <th>نوع ارز</th>
                                <th>موجودی/حداقل فروش</th>
                                <th>قیمت واحد</th>
                                <th>تاریخ ثبت</th>
                                <th>خرید</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cu as $c)
                                @if($currency->title === $c['currency']['title'])
                                    <tr>
                                        <td>{{$c['currency']['title']}} {{$c['currency']['symbol']}}</td>
                                        <td>{{number_format($c['balance'])}}/ {{number_format($c['min_sale'])}}</td>
                                        <td>{{number_format($c['unit_price'])}}</td>
                                        <td>{{jdate($c['created_at'])->format('Y/m/d')}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info custom-btn hidden-xs">
                                                <i class="fa fa-shopping-basket"></i>
                                                خرید
                                            </a>
                                            <i class="fa fa-shopping-basket hidden-md hidden-lg btn btn-sm btn-info custom-btn"></i>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- About area Start -->
<section id="about-us" class="about section-big">
    <div class="container">
        <div class="section-title">
            <h2 class="title-class">درباره <span>فیبوکوین</span></h2>
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
                            فیبوکوین یک پلتفرم معامله ایمن ارزهای دیجیتال در ایران است که با حذف واسطه‌ها شرایط معامله
                            در بستری مطمئن و بدون پرداخت هزینه های ناشی از واسطه‌گری را ایجاد نموده است.
                            فیبوکوین معتقد است ، تکنولوژی بلاک چین و ارزهای دیجیتال می تواند در شرایط تحریم های اقتصادی
                            ناجوانمردانه علیه کشورمان مراودات مالی هم وطنان عزیزمان را تسهیل نموده و ارتباط آنان را با
                            بازارهای مالی جهانی فراهم نماید .ما تلاش میکنیم که با بهره گیری از توان فنی متخصصان داخلی،
                            کشور عزیزمان را به قطب اصلی تکنولوژی بلاک چین و ارزهای دیجیتال در خاورمیانه مبدل سازیم.

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
                <h2 class="title-class">ویژگی های <span>فیبوکوین</span></h2>
            </div>
        </div>

        <div class="row feature-inner about-content">

            <div class="row">
                <div class="col-sm-12 col-md-3">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/clean-design-.png" alt="">
                            </div>
                        </div>
                        <h3>
                            سریع و آسان
                        </h3>
                        <p>
                            فیبو کوین با ایجاد شرایط آسان معامله و پرداخت سریع تجربه‌ای متفاوت را در بازار معاملات رمز
                            ارز ها برای شما به ارمغان می آورد.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/retina-ready.png" alt="">
                            </div>
                        </div>
                        <h3>
                            ارزان
                        </h3>
                        <p>
                            فیبوکوین بستری است که در آن فروشنده و خریدار به دنبال قیمت توافقی با حداقل کارمزد های جهانی
                            معامله هم را تجربه خواهند کرد. </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/pixel-perfect.png" alt="">
                            </div>
                        </div>
                        <h3>مطمئن</h3>
                        <p>
                            فیبوکوین با ایجاد شرایط پرداخت امن و رهیابی معاملات تا زمان حصول نتیجه شرایط مطمئن را برای
                            کلیه معامله‌گران فراهم می‌کند.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/responsive.png" alt="">
                            </div>
                        </div>
                        <h3>بی واسطه</h3>
                        <p>
                            فیبو کوین با حذف واسطه ها و ایجاد ارتباط مستقیم بین خریدار و فروشنده در بستری امن، شرایط
                            معامله در بازار رقابتی را فراهم می کند.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- feature area starts -->
<section id="feature" class="feature-area section-big" style="background: #f9f9f9 !important">
    <div class="container">

        <div class="row">
            <!-- section-title -->
            <div class="section-title">
                <h2 class="title-class">
                    ترید به وقت فیبو کوین
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
                    <h4 style="color:#000;padding: 5px">نظرات کاربران</h4>
                    <p style="color:#3c3c3c;padding: 5px">متن مورد نظر اینجا قرار میگیرد.</p>
                </div>
                <div class="col-md-3">
                    <img src="/site-assets/images/join-us.svg" alt="join-us">
                    <h4 style="color:#000;padding: 5px">همکاری با فیبوکوین</h4>
                    <p style="color:#3c3c3c;padding: 5px">متن مورد نظر اینجا قرار میگیرد.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- Why Fibocoin -->
<section id="why-fibocoin" style="background: #f5f9fc" class="feature-area section-big">
    <div class="container">
        <div class="section-title">
            <h2 class="title-class">چرا فیبوکوین؟</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="line-height:35px">
                    فیبوکوین بزرگترین سامانه خرید و فروش ارز های دیجیتال با پرداخت ضمانت شده در ایران
                    <br>
                    در فیبوکوین ابتدا فروشنده و خریدار رمز ارزهای مورد عرضه و تقاضای خود را در سایت ثبت میکنند
                    <br>
                    در مرحله بعد کاربر( خریدار یا فروشنده )با توجه به جدول سفارشات یک و یا چند پیشنهاد را انتخاب می‌کند
                    <br>
                    سپس خریدار مبلغ ریالی معامله مورد نظر را به حساب فیبوکوین واریز کرده و پس از تایید انجام پرداخت امن
                    توسط فیبوکوین فروشنده رمز ارز مورد معامله را به آدرس کیف پول الکترونیکی (ولت) انتقال می‌دهد و در
                    مرحله نهایی فیبو کوین پس از تایید تراکنش، مبلغ ریالی را به حساب فروشنده واریز می‌کند
                </p>
            </div>
        </div>
    </div>

</section>
<!-- Questions -->

<!-- Contact  area Start -->
<section id="footer" class="section-big" style="background: #0B0E11;color:#fff">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <a href="">خدمات</a>
            </div>
            <div class="col-md-2">
                <a href="">آموزش</a>
            </div>
            <div class="col-md-2">
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
            <div class="col-md-2">
                <a href="">شبکه های اجتماعی</a>
            </div>
            <div class="col-md-2">
                <a href="">ارتباط با ما</a>
            </div>
            <div class="col-md-2">
                <li><a class="smooth_scroll" href="#about-us">درباره ما</a></li>
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
    $(document).ready(function () {
        for (i = 1; i < 100; i++) {
            $('#orders_table+i').DataTable({searching: false, paging: false, info: false});
        }
    });
</script>
</body>

</html>

