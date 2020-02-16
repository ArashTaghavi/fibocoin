@extends('layouts.site')
@section('content')
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
                                                ترید به وقت فیبو کوین

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
                                                   controls autoplay>

                                            </video>
                                        </div>
                                        <div class="col-md-2 slider-container">
                                            <!-- Swiper -->
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    @foreach($sliders as $slider)
                                                        <div class="swiper-slide">
                                                            <img src="{{$slider->profile_image}}"
                                                                 style="width:{{$loop->iteration==1 ? 91 : 100}}%"
                                                                 alt="{{$loop->iteration}}">
                                                        </div>
                                                    @endforeach
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
                                            <p>
                                                ترید به وقت فیبو کوین

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
                                            <p>
                                                ترید به وقت فیبو کوین

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
                <h2 class="title-class">بازار</h2>

            </div>
            <div class="row">
                <div class="prices_container col-md-12" style="height: 400px">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text" style="font-family: IRANSans">مشاهده همه بازار ها</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "100%",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en",
                                "isTransparent": true
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
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
                                            <td>{{($c['balance'])}}/ {{($c['min_sale'])}}</td>
                                            <td>{{number_format($c['unit_price'])}}</td>
                                            <td>{{jdate($c['created_at'])->format('Y/m/d')}}</td>
                                            <td>
                                                <a href="/user-dashboard/buy-request/{{$c['id']}}"
                                                   class="btn btn-sm btn-info custom-btn hidden-xs">
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
                                فیبوکوین یک پلتفرم معامله ایمن ارزهای دیجیتال در ایران است که با حذف واسطه‌ها شرایط
                                معامله
                                در بستری مطمئن و بدون پرداخت هزینه های ناشی از واسطه‌گری را ایجاد نموده است.
                                فیبوکوین معتقد است ، تکنولوژی بلاک چین و ارزهای دیجیتال می تواند در شرایط تحریم های
                                اقتصادی
                                ناجوانمردانه علیه کشورمان مراودات مالی هم وطنان عزیزمان را تسهیل نموده و ارتباط آنان را
                                با
                                بازارهای مالی جهانی فراهم نماید .ما تلاش میکنیم که با بهره گیری از توان فنی متخصصان
                                داخلی،
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
                                فیبو کوین با ایجاد شرایط آسان معامله و پرداخت سریع تجربه‌ای متفاوت را در بازار معاملات
                                رمز
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
                                فیبوکوین بستری است که در آن فروشنده و خریدار به دنبال قیمت توافقی با حداقل کارمزد های
                                جهانی
                                معامله امن را تجربه خواهند کرد. </p>
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
                                فیبوکوین با ایجاد شرایط پرداخت امن و رهیابی معاملات تا زمان حصول نتیجه شرایط مطمئن را
                                برای
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
                        <h4 style="color:#000;padding: 5px">پیشتبانی</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="/site-assets/images/blog.svg" alt="blog">
                        <h4 style="color:#000;padding: 5px">بلاگ فیبوکوین</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="/site-assets/images/community.svg" alt="community">
                        <h4 style="color:#000;padding: 5px">
                            <a href="/comments">نظرات کاربران</a>
                        </h4>
                    </div>
                    <div class="col-md-3">
                        <img src="/site-assets/images/join-us.svg" alt="join-us">
                        <h4 style="color:#000;padding: 5px">همکاری با فیبوکوین</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area ends -->
    {{--
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
    <!-- Questions -->--}}
@stop
