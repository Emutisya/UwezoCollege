<!DOCTYPE html>
<html>

<head>
    <title>Uwezo College || Admission</title>
    {{-- <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"> --}}
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mentors Responsive Web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web template, 
Smartphone Compatible Web template, free Webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola Web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Custom Theme files -->
    {{-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> --}}
    <!-- js -->
    {{-- <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"> </script> --}}
    <!-- //js -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="icon" href="/images/logo2.png" type="image/x-icon">
    <!--/fonts-->
    {{-- <link rel="stylesheet" href="{{ asset('css/elegant-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css" />
    <link rel=<link rel="icon" href="/images/logo2.png" type="image/x-icon">"stylesheet"
    href="{{ asset('css/slicknav.min.css') }}" type="text/css" /> --}}
    <link rel="icon" href="/images/logo2.png" type="image/x-icon">

    {{-- <link href="css/custom.css" rel="stylesheet" media="all"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Css Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" /> --}}

    <!--fonts-->

    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

    <style>
        .button {
            background-color: #6b3f98;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        #logo {
            float: left;
            display: inline-block;
        }

        #call {
            float: center;
            display: inline-block;
            color: #2caae2;

            align-items: center;
        }

        #callafter {
            float: center;
            display: inline-block;
            color: #ffff;
            align-items: center;
        }


        #face {
            float: right;
            padding: 10px 1px;
            text-align: center;
            align: center;

        }



        .nav {
            overflow: hidden;

            background-color: #2caae2;
        }


        #section1 {}


        #section2 {}

        font-size:30px .topnav {
            overflow: hidden;
            text-align: center;
            height: 80px;
            background-color: #6b3f98;

        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .nav a {
            float: center;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 670px;
            height: 40px;
            text-decoration: none;
            font-size: 17px;
        }




        .right-side-content {
            display: flex;
            align-items: center;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            height: 10px;
            text-align: center;
            padding: 18px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #2caae2;
            color: black;
            padding: 33px 16px;
        }

        .topnav a.active {
            background-color: #2caae2;
            color: white;
            padding: 38px 16px;
        }

    </style>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
</head>

<body>


    {{-- <div span class="align-middle"> --}}
    {{-- <marquee style=" height=16px; color: #FF0000;">Click To Access E-learning</a> </marquee> --}}
    {{-- <marquee direction="left">
            <a href="https://elearning.uwezocollege.ac.ke/" target="_blank">
                <b style="height=20px; color: #FF0000; font-weight:bold; "> Click To Access E-learning</b>
            </a>
        </marquee>


    </div>
 --}}

    <div id="preloder">
        <div class="loader"></div>
    </div>


    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="#"><img width="60" height="60" class="ml-2" src="{{ asset('images/mic_icon_only.png') }}"
                    alt="" /></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget"></div>

    </div>
    @include('partials.nav')
    @include('partials.hero')
    @yield('content')

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!--footer-->
</body>

</html>
