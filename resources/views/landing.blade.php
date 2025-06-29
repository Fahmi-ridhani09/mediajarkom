<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Makerting html5 landing page">
    <link href="{{ asset('/siena') }}/assets/images/favicon/favicon.ico" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('/siena') }}/assets/css/external.css" rel="stylesheet">
    <link href="{{ asset('/siena') }}/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/siena') }}/assets/js/html5shiv.js"></script>
      <script src="{{ asset('/siena') }}/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body,
        body * {
            font-family: 'Poppins', sans-serif;
        }

        .col-12.col-md-12.col-lg-6 .hero-headline,
        .col-12.col-md-12.col-lg-6 .hero-bio {
            color: #5c4033;
        }

        #hero .container {
            padding-left: 10px;
            padding-right: 10px;
        }

        /* Jika mau bagian atas dan bawah lebih kecil juga */
        #hero {
            padding-top: 180px;
            padding-bottom: 180px;
        }

        .bg-shape {
            background-image: none !important;
            background-color: #D2B48C !important;
        }

        #hero {
            position: relative;
            overflow: hidden;
            background-color: #fff;
            /* bagian utama tetap putih */
        }

        /* Shape coklat di sisi kanan */
        #hero::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -100px;
            width: 80%;
            height: 200%;
            background: #D2B48C;
            border-radius: 50%;
            transform: rotate(-15deg);
            z-index: -1;
        }

        .hero {
            background: url("data:image/svg+xml;utf8,<svg viewBox='0 0 1440 320' xmlns='http://www.w3.org/2000/svg'><path fill='%23D2B48C' fill-opacity='1' d='M0,102L48,89C96,76,192,51,288,59C384,67,480,93,576,97C672,102,768,76,864,72C960,67,1056,84,1152,93C1248,102,1344,102,1392,102L1440,102L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z'/></svg>") no-repeat top right;
            background-size: cover;
        }

        .navbar-nav li a {
            color: #8B4513;
        }

        .navbar-nav li a:hover {
            color: #5a2d0d;
        }

        #hero .btn-gradient {
            background-color: #D2B48C !important;
            border: none !important;
            color: #5c4033 !important;
        }

        #hero .btn-gradient:hover {
            background-color: #e0914b !important;
            color: white !important;
        }

        .feature-content h3,
        .feature-content p {
            color: white;
        }

        .footer-copyright {
            color: #D2B48C;
        }

        .hero-img-slider {
            position: relative;
            width: 400px;
            height: 300px;
            overflow: hidden;
        }

        .hero-img-slider img {
            position: absolute;
            top: 0;
            left: 0;
            width: 400px;
            height: 300px;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .hero-img-slider img.active {
            opacity: 1;
        }
    </style>
    <title>Landing Page</title>


</head>

<body class="body-scroll">
    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <!-- Header
============================================= -->
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <br>
                        <img class="img-fluid" src="{{ asset('images/logo/logo4.png') }}" alt="Logo Landing"
                            width="200" height="100">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toogle-inner"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="active">
                                <a href="{{ url('/home') }}">Login</a>
                            </li>
                            </li>
                            <li><a data-scroll="scrollTo" href="#feature2">Tujuan Pembelajaran</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </nav>
        </header>
    </div>
    <!-- Slider #1
============================================= -->
    <section id="hero" class="section hero">
        <div class="container">
            <div class="row row-content">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="hero-headline">Media Pembelajaran Interaktif Jaringan Komputer & Internet</div>
                    <div class="hero-bio">Jaringan Komputer & Internet Kelas XI</div>
                    <div class="hero-action">
                        <a href="{{ url('/home') }}" class="btn btn-gradient">Mulai Belajar</a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <br>
                    <div class="hero-img-slider">
                        <img class="img-fluid" src="{{ asset('images/logo/landing2.png') }}" alt="Logo Landing"
                            width="400" height="300">
                        <img class="img-fluid" src="{{ asset('images/logo/landing.png') }}" alt="Logo Landing"
                            width="400" height="300">
                        <img class="img-fluid" src="{{ asset('images/logo/logoo.png') }}" alt="Logo Landing"
                            width="400" height="300">
                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <section id="feature2" class="section feature feature-2 bg-shape">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('/siena') }}/assets/images/features/service-1.svg"
                        alt="device" />
                </div>
                <!-- .col-md-6 end -->
                <div class="col-12 col-md-12 col-lg-5 offset-lg-1">
                    <div class="feature-panel mt-80">
                        <div class="feature-img bg-purple">
                            <img src="{{ asset('/siena') }}/assets/images/features/bookmark.svg" alt="device">
                        </div>
                        <div class="feature-content">
                            <h3>Tujuan Pembelajaran</h3>
                            <p>Menjelaskan Komponen Jaringan Komputer</p>
                            <br>
                            <p>Menjelaskan Model Jaringan Komputer dalam bentuk Lapisan OSI</p>
                            <br>
                            <p>Menjelaskan Konsep TCP/IP</p>
                            <br>
                            <p>Menjelaskan Topologi Jaringan Komputer</p>
                            <p>Menentukan dan merancang Topologi jaringan yang sesuai dengan kebutuhan</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
        </div>
        <!-- .container end -->
    </section>

    <!-- Footer
============================================= -->
    <footer id="footer" class="footer">

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <hr>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="footer-copyright" style="color: #8B4513;">
                            <span>&copy; 2025. Media Pembelajaran Interaktif Jaringan Komputer & Internet</span>
                        </div>

                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-bottom end -->
    </footer>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
 ============================================= -->
    <script src="{{ asset('/siena') }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/siena') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('/siena') }}/assets/js/functions.js"></script>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-img-slider img');

        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 2000); // Ganti slide setiap 2 detik
    </script>

</body>

</html>
