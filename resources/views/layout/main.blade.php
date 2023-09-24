<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Car Project</title>
    <meta name="title" content="">
    <meta name="keywords"
        content="Almajdouie, Motors, Changan, Hyundai, Genesis, Peugeot, Cars, Changan Service, Hyundai Service, Genesis Service, Peugeot Service, صيانة هيونداي , صيانة هيونداي المجدوعي, صيانة شانجان, صيانة بيجو, صيانة بيجو المجدوعي, خدمات صيانة السيارات, خدمات صيانة">
    <meta name="description"
        content="Motors, Changan, Hyundai, Genesis, Peugeot, Cars, Changan Service, Hyundai Service, Genesis Service, Peugeot Service, صيانة هيونداي , صيانة هيونداي المجدوعي, صيانة شانجان, صيانة بيجو, صيانة بيجو المجدوعي, خد">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts-1.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/build/app.min-1.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-1.css')}}">
    <style>
        .float-whatsapp {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 1px 1px 1px #fff;
            z-index: 9999;
        }

        .float-complain {
            position: fixed;
            width: 190px;
            height: 45px;
            bottom: 50px;
            left: 50px;
            background-color: #134a88;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 16px;
            box-shadow: 1px 1px 1px #fff;
            z-index: 9999;
            padding-top: 13px;
        }

        .float-complain:hover {
            color: #aadaff;
            text-decoration: none;
        }

        .gotop {
            left: 20px;
            right: auto;
            position: fixed;
            z-index: 9999;
        }

        .my-float {
            margin-top: 16px;
        }

        #bot-container img {
            max-width: 60px;
            max-height: 60px;
        }

        input.error,
        select.error {
            border: 1px solid #c90202;
        }

        label.error {
            color: red;
            font-size: 80%;
        }

        span.combodate select {
            display: table-cell;
        }

        .white-box {
            background: #fff;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid #e5ebec;
            border-radius: 4px;
        }

        .ribbon-wrapper {
            position: relative;
            background: #f4f8f9;
            padding: 50px 15px 15px 50px;
        }

        .ribbon {
            padding: 0 20px;
            height: 30px;
            line-height: 30px;
            clear: left;
            position: absolute;
            top: 12px;
            left: -2px;
            color: #fff;
        }

        .ribbon-primary {
            background: #0283cc;
        }

        .carousel-control span {
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
            font-size: 30px;
        }

        .sh-nav-bar .sh-nav>ul>li+li,
        html[dir=rtl] .sh-nav>ul>li+li {
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        @media screen and (max-width: 1450px) {
            .site-header .site-logo {
                padding-left: 3rem;
                padding-right: 1.5rem;
                max-width: 230px;
            }
        }

        @media (min-width: 1200px) {

            .d-lg-none,
            .sh-nav-bar .sh-nav .mob-nav-closer,
            .sh-nav-bar .sh-nav-wrap .mob-nav-icon {
                display: none !important;
            }
        }
    </style>
    </style>    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/switcher.css?v=1') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=1') }}">
    </head>

<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <script src="{{ asset('assets/build/app.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}"></script>

    <script>
        $(document).ready(function() {

            $('#hmSlider').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                items: 1
            });

            $('#hmSliderRTL').owlCarousel({
                rtl: true,
                loop: true,
                margin: 0,
                nav: false,
                items: 1
            });

            setTimeout(() => {
                nextimage();
            }, 2500);

            $(document).on('click', '.cookie-policy__cta', function() {
                $.cookie('terms-agreed', $(this).data('version'), {
                    path: '/'
                });
                $('.cookie-policy').hide();
            });
            $(document).on('click', '.cookie-policy__close-btn', function() {
                $('.cookie-policy').hide();
            });

        });

        function nextimage() {
            var owl = $('.owl-carousel');
            owl.owlCarousel();
            setTimeout(() => {
                owl.trigger('next.owl.carousel');
                nextimage();
            }, 2500);
        }
    </script>

</body>

</html>
