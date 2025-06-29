
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
    <link href="{{ asset("/siena") }}/assets/images/favicon/favicon.ico" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset("/siena") }}/assets/css/external.css" rel="stylesheet">
    <link href="{{ asset("/siena") }}/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ asset("/siena") }}/assets/js/html5shiv.js"></script>
      <script src="{{ asset("/siena") }}/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Siena | Marketing Html5 Landing Page</title>
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
                        <img class="logo logo-dark" src="{{ asset("/siena") }}/assets/images/logo/logo-dark.png" alt="Kolaso Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toogle-inner"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="active"><a data-scroll="scrollTo" href="#hero">home</a>
                            </li>
                            <li><a data-scroll="scrollTo" href="#feature2">feature</a>
                            </li>
                            <li><a data-scroll="scrollTo" href="#reviews">reviews</a>
                            </li>
                            <li><a data-scroll="scrollTo" href="#clients">clients</a>
                            </li>
                            <li><a data-scroll="scrollTo" href="#cta">signup</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </nav>
        </header>
        <!-- Slider #1
============================================= -->
        <section id="hero" class="section hero">
            <div class="container">
                <div class="row row-content">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="hero-headline">Engage more users & supercharge your landing conversion rates</div>
                        <div class="hero-bio">Launch your campaign and benefit from our expertise on designing and
                            managing conversion centered landing pages.</div>
                        <div class="hero-action">
                            <a href="#pricing" class="btn btn--gradient" data-scroll="scrollTo">Get Started Now</a>
                            <span class="video-button">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <span class="player-text"> Watch a Demo</span>
                                    <span class="btn-player"><img src="{{ asset("/siena") }}/assets/images/video/player.svg"
                                            alt="video player"></span>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="hero-img">
                            <img class="img-fluid" src="{{ asset("/siena") }}/assets/images/hero/hero.svg" alt="background">
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #slider end -->
        <!-- Feature #1
============================================= -->
        <section id="feature1" class="section feature feature-center bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-1 text--center mb-80">
                            <h2 class="heading-title">
                                We design your landing page to get high convertion rates
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Panel #1 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img bg-blue">
                                <img src="{{ asset("/siena") }}/assets/images/features/champion.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>Start your campaign</h3>
                                <p>Highly targeted landing pages will increase your results, and optimization with A/B
                                    testing takes you to the next level. </p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Panel #2 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img bg-green">
                                <img src="{{ asset("/siena") }}/assets/images/features/team.svg" alt="users">
                            </div>
                            <div class="feature-content">
                                <h3>Engage new users</h3>
                                <p>Higher conversion rates means you get more business from your cur rent traffic and
                                    reduce cost per cost per acquisition.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Panel #3 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img bg-orange">
                                <img src="{{ asset("/siena") }}/assets/images/features/chart.svg" alt="chart">
                            </div>
                            <div class="feature-content">
                                <h3>Claim your reward</h3>
                                <p>Stop wasting money on more traffic. Get more leads on your existing traffic instead.
                                    At the end, this improves your ROI significantly.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #feature1 end -->
        <!-- Feature #2
============================================= -->
        <section id="feature2" class="section feature feature-2 bg-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <img class="img-fluid" src="{{ asset("/siena") }}/assets/images/features/service-1.svg" alt="device" />
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-12 col-md-12 col-lg-5 offset-lg-1">
                        <div class="feature-panel mt-80">
                            <div class="feature-img bg-purple">
                                <img src="{{ asset("/siena") }}/assets/images/features/bookmark.svg" alt="device">
                            </div>
                            <div class="feature-content">
                                <h3>Build and customize your perfect landing page</h3>
                                <p>This should be used to tell a story and let your users know a little more about your
                                    product or service. How can you benefit them? convince them to use your service.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <div class="clearfix mt-100 pt-150"></div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="feature-panel">
                            <div class="feature-img bg-yellow">
                                <img src="{{ asset("/siena") }}/assets/images/features/bookmark.svg" alt="device">
                            </div>
                            <div class="feature-content">
                                <h3>Launch your campaign & start engaging new users</h3>
                                <p>This should be used to tell a story and let your users know a little more about your
                                    product or service.</p>
                                <ul>
                                    <li>Enim ad minim veniam, quis nostrud exercitat ullamco.</li>
                                    <li>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed doeo eiusmod tempor.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                    <div class="col-12 col-md-12 col-lg-6 offset-lg-1">
                        <img class="img-fluid pull-right" src="{{ asset("/siena") }}/assets/images/features/service-2.svg" alt="device" />
                    </div>
                    <!-- .col-md-6 end -->

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #feature2 end -->
        <!-- reviews
============================================= -->
        <section id="reviews" class="section reviews pb-0 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="carousel carousel-dots owl-carousel" data-slide="1" data-slide-rs="1"
                            data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                            data-speed="800">

                            <!-- Testimonial #1 -->
                            <div class="testimonial-panel">
                                <div class="testimonial-body">
                                    <p>This should be used to tell a story and include any testimonials you might have
                                        about your product or service for your clients.</p>
                                    <div class="testimonial-author">
                                        <h5>Frank Smith - Envato CEO</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial #2  -->
                            <div class="testimonial-panel">
                                <div class="testimonial-body">
                                    <p>This should be used to tell a story and include any testimonials you might have
                                        about your product or service for your clients.</p>
                                    <div class="testimonial-author">
                                        <h5>Jone Doe - Zytheme CEO</h5>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial #3 -->
                            <div class="testimonial-panel">
                                <div class="testimonial-body">
                                    <p>Siena has helped us grow our business by optimizing our landing pages. We’ve
                                        increased conversion rates by 120%.</p>
                                    <div class="testimonial-author">
                                        <h5>Bone Datche - 7oroof CEO</h5>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .carousel End -->
                    </div>
                </div>
                <!-- .row End -->
            </div>
            <!-- .container End -->
        </section>
        <!-- #reviews End-->
        <!-- Clients Section
============================================= -->
        <section id="clients" class="section clients clients-carousel bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="carousel carousel-dots owl-carousel" data-slide="5" data-slide-res="2"
                            data-autoplay="true" data-nav="false" data-dots="false" data-space="30" data-loop="true"
                            data-speed="800">
                            <!-- Client #1 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/1.png" alt="client">
                            </div>

                            <!-- Client #2 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/2.png" alt="client">
                            </div>

                            <!-- Client #3 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/3.png" alt="client">
                            </div>

                            <!-- Client #4 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/4.png" alt="client">
                            </div>

                            <!-- Client #5 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/5.png" alt="client">
                            </div>
                            <!-- Client #3 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/3.png" alt="client">
                            </div>

                            <!-- Client #4 -->
                            <div class="client">
                                <img class="center-block" src="{{ asset("/siena") }}/assets/images/clients/4.png" alt="client">
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #clients end -->
        <!-- Pricing Table
============================================= -->
        <section id="pricing" class="section pricing bg-gray bg-shape">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="heading heading-1 text--center mb-40">
                            <h2 class="heading-title">No hidden charges choose your plan!</h2>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="pricing-filter">
                            <a href="#" class="monthly is-active">Monthly</a>
                            <a href="#" class="yearly">yearly</a>
                            <span class="switch"></span>
                        </div>
                    </div>

                    <!-- Pricing Packge #1
            ============================================= -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 price-table">
                        <div class="pricing-panel">
                            <!--  Pricing heading  -->
                            <div class="pricing-heading text--center">
                                <h4>Starter</h4>
                                <p>free</p>
                            </div>
                            <!--  Pricing body  -->
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>Up to 10 users monthly</li>
                                    <li>A/B testing</li>
                                    <li>Limited updates</li>
                                </ul>
                            </div>
                            <!--  Pricing Body  -->
                            <div class="pricing-footer">
                                <a class="btn btn--primary btn--bordered" href="#">Get Started Now</a>
                                <p>Start by trying our service for 30 days free trial no credit card required.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .pricing-table End -->

                    <!-- Pricing Packge #2
            ============================================= -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 price-table">
                        <div class="pricing-panel pricing-active">
                            <!--  Pricing heading  -->
                            <div class="pricing-heading text--center">
                                <h4>Premium</h4>
                                <div class="pricing-switcher">
                                    <p class="pricing-monthly"><span class="currency">$</span>38<span class="period">/
                                            mo</span></p>
                                    <p class="pricing-yealry"><span class="currency">$</span>68<span class="period">/
                                            year</span></p>
                                </div>
                            </div>
                            <!--  Pricing body  -->
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>Up to 10 users monthly</li>
                                    <li>Unlimited updates</li>
                                    <li>A/B Testing</li>
                                </ul>
                            </div>
                            <!--  Pricing Body  -->
                            <div class="pricing-footer">
                                <a class="btn btn--gradient" href="#">Get Started Now</a>
                                <p>Start by trying our service for 30 days free trial no credit card required.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .pricing-table End -->

                    <!-- Pricing Packge #3
            ============================================= -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 price-table">
                        <div class="pricing-panel">
                            <!--  Pricing heading  -->
                            <div class="pricing-heading text--center">
                                <h4 class="reveal">Company</h4>
                                <div class="pricing-switcher">
                                    <p class="pricing-monthly"><span class="currency">$</span>58<span class="period">/
                                            mo</span></p>
                                    <p class="pricing-yealry"><span class="currency">$</span>98<span class="period">/
                                            year</span></p>
                                </div>
                            </div>
                            <!--  Pricing body  -->
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>Up to 30 users monthly</li>
                                    <li>Unlimited updates</li>
                                    <li>A/B Testing</li>
                                </ul>
                            </div>
                            <!--  Pricing Body  -->
                            <div class="pricing-footer">
                                <a class="btn btn--primary btn--bordered" href="#">Get Started Now</a>
                                <p>Start by trying our service for 30 days free trial no credit card required.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .pricing-table End -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- Footer
============================================= -->
        <footer id="footer" class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="footer-logo">
                                <img src="{{ asset("/siena") }}/assets/images/logo/logo-dark.png" alt="Siena Logo">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            <div class="footer-menu">
                                <a href="#">home</a>
                                <a href="#">Features</a>
                                <a href="#">Services</a>
                                <a href="#">home</a>
                                <a href="#">Testimonials</a>
                                <a href="#">Pricing</a>
                                <a href="#">Contact</a>
                            </div>
                        </div>
                    </div><!-- .row end -->
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="footer-info">
                                <p>support@siena.com</p>
                                <p>+61 525 240 310</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="footer-social">
                                <a class="twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="dribbble" href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                <a class="google" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <hr>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="footer-copyright">
                                <span>&copy; Zytheme 2019, All Rights Reserved.</span>
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
    <script src="{{ asset("/siena") }}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset("/siena") }}/assets/js/plugins.js"></script>
    <script src="{{ asset("/siena") }}/assets/js/functions.js"></script>
</body>

</html>