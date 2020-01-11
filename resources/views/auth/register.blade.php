<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet"
          href="/dashboard-assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/sweetalert/dist/sweetalert.css">

    <!-- App styles -->
    <link rel="stylesheet" href="/dashboard-assets/css/app.min.css">
    <link rel="stylesheet" href="/dashboard-assets/css/custom.css">


    <script src="/dashboard-assets/vendors/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        h2,p {
            font-family: IRANSans !important;
        }
    </style>
</head>

<body data-sa-theme="2">
@if($errors->any())
    <script type="text/javascript">
        swal({
            title: 'پیام سیستم',
            text: "{{ $errors->first()  }}",
            type: 'error',
            showConfirmButton: true,
            timer: 5000
        });
    </script>
@endif

<!-- The Modal -->
<div class="modal" id="terms">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">قوانین و مقررات</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="font-size:12px;line-height:30px">
                <p>تمامی فعالیت های سامانه «فیبوکوین» تابع قوانین جمهوری اسلامی ایران و تجارت
                    الکترونیک می باشد. لازمه استفاده از خدمات سامانه «فیبوکوین» قبول قوانین آن بوده
                    و تمام کاربران باید این قوانین را رعایت کنند.
                </p>

                <div style="font-size: 12px">
                    <b> قوانین خرید و فروش</b>
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
                    <br>
                    <br>

                    <b>قوانین احراز هویت و محرمانگی اطلاعات کاربران</b>
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
                    <br>
                    <br>
                    <b>تغییرات</b>
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
<div class="login">

    <div class="login__block" id="l-register" style="display: block">
        <div class="login__block__body">
            <form action="{{!session()->get('verify_registration') ?
route('doRegister') : route('verify')}}" method="POST">
                @csrf
                @if(!session()->get('verify_registration'))
                    <div class="form-group">
                        <input type="number" maxlength="11" class="form-control text-center" name="mobile"
                               placeholder="موبایل">
                    </div>
                    <button class="btn btn--icon login__block__btn">
                        <i class="zmdi zmdi-arrow-forward"></i>
                    </button>
                    <p style="font-size: 11px;">تمامی
                        <a href="#" data-toggle="modal" data-target="#terms">قوانین و مقررات</a>
                        سایت را میپذریم.
                        <input type="checkbox" name="terms">
                    </p>
                @else
                    <div class="form-group">
                        <input type="verify" maxlength="11" class="form-control text-center" name="verify"
                               placeholder="کد تایید">
                        <span class="text-muted">
                            به دلیل فعال نبودن سامانه پیامکی، از کد تایید زیر استفاده کنید.
                            <br>
                            {{session()->get('verify_registration')[0]}}
                        </span>
                    </div>
                    <button class="btn btn--icon login__block__btn">
                        <i class="zmdi zmdi-arrow-forward"></i>
                    </button>
                @endif
            </form>


        </div>
    </div>
</div>
<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>?????!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to
        access this website.</p>

    <div class="ie-warning__downloads">
        <a href="/dashboard-assets/http://www.google.com/chrome">
            <img src="/dashboard-assets/img/browsers/chrome.png" alt="">
        </a>

        <a href="/dashboard-assets/https://www.mozilla.org/en-US/firefox/new">
            <img src="/dashboard-assets/img/browsers/firefox.png" alt="">
        </a>

        <a href="/dashboard-assets/http://www.opera.com/default.htm">
            <img src="/dashboard-assets/img/browsers/opera.png" alt="">
        </a>

        <a href="/dashboard-assets/https://support.apple.com/downloads/safari">
            <img src="/dashboard-assets/img/browsers/safari.png" alt="">
        </a>

        <a href="/dashboard-assets/https://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="/dashboard-assets/img/browsers/edge.png" alt="">
        </a>

        <a href="/dashboard-assets/http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="/dashboard-assets/img/browsers/ie.png" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Javascript -->
<!-- Vendors -->
<script src="/dashboard-assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- App functions and actions -->
<script src="/dashboard-assets/js/app.min.js"></script>
</body>
</html>
