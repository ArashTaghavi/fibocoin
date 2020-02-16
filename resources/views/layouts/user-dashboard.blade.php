<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title></title>

    <!-- Vendor styles -->
    <link rel="stylesheet"
          href="/dashboard-assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <link rel="stylesheet" href="/dashboard-assets/vendors/sweetalert/dist/sweetalert.css">
    <script src="/dashboard-assets/vendors/sweetalert/dist/sweetalert.min.js"></script>

    <!-- App styles -->
    <link rel="stylesheet" href="/dashboard-assets/css/app.min.css">
    <link rel="stylesheet" href="/dashboard-assets/css/custom.css">
    <style>
        h2, p {
            font-family: IRANSans !important;
        }

        .sweet-alert {
            text-align: right !important;
            direction: rtl !important;
        }
        .sa-error-container{
            background-color: transparent !important;
        }
        .sa-error-container p {
            font-size: 12px !important;
            color: red !important;
        }
        .sa-input-error::after , .sa-input-error::before {
            width: 0 !important;
        }
    </style>

</head>

<body data-sa-theme="2">
@if($set_password==1)

    <script type="text/javascript">
        swal({
            title: "تنظیم کلمه عبور",
            text: "لطفا کلمه عبور مورد نظر خود را وارد نمایید...",
            type: "input",
            closeOnConfirm: false,
            inputPlaceholder: "کلمه عبور..."
        }, function (inputValue) {
            var data = {'password': inputValue, 'password_confirmation': inputValue};
            if (inputValue === false) return false;
            if (inputValue === "") {
                swal.showInputError("لطفا کلمه عبور را وارد نمایید.");
                return false
            }

            axios.post('/profile/change-password', data)
                .then(response => {
                    swal("عملیات با موفقیت انجام شد!", "کلمه عبور: " + inputValue, "success");
                }).catch(error => swal.showInputError("کلمه عبور باید شامل حروف کوچک، بزرگ و حداقل یک علامت نگارشی باشد."))
        });
    </script>
@endif
<div id="app"></div>

<!-- Javascript -->
<!-- Vendors -->
<script src="/dashboard-assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<script src="/dashboard-assets/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/flot/jquery.flot.js"></script>
<script src="/dashboard-assets/vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="/dashboard-assets/vendors/bower_components/peity/jquery.peity.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

{{--TradingView--}}
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
{{--TradingView--}}

<!-- App functions and actions -->
<script src="/dashboard-assets/js/app.min.js"></script>
<script src="/user-js/app.js"></script>
</body>
</html>