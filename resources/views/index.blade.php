<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Medicamp Responsive Bootstrap Template">
    <meta name="keywords" content="Pixel">
    <meta name="author" content="rkwebdesigns">
    <!-- Site Title   -->
    <title>Medicamp - Covid Servey</title>
    <!-- Fav Icons   -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/bootstrap-dropdownhover.min.css") }}" rel="stylesheet">
    <!-- Fonts Awesome -->
    <link href="{{ asset("assets/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400" rel="stylesheet">
    <!-- animate Effect -->
    <link href="{{ asset("assets/css/animate.css") }}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset("assets/css/responsive.css") }}" rel="stylesheet">
</head>
<body>
<header id="header" class="head">
    <div class="top-header">
        <div class="container">
            <div class="row ">
                <ul class="contact-detail2 col-md-6 pull-left">
                    <li><a href="#" target="_blank"><i class="fa fa-mobile"></i>Call US + 1 (1800) 459 123 7</a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-envelope-o"></i> example@gmail.com</a></li>
                </ul>
                <div class="social-links col-md-6 pull-right">
                    <ul class="social-icons pull-right">
                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="http://dribble.com/" target="_blank"><i class="fa fa-skype"></i></a></li>
                        <li><a href="http://pinterest.com" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <div class="logo-text"><span><samp>M</samp>Medi</span>camp</div>
                    <!-- <img src="images/logo.png" alt="logo"> -->
                </a>
            </div>
           @include("menu")
            <!--/.nav-collapse -->
        </div>
    </nav>
</header>
<section id="slider" class="">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol><!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">

            <div class="item active" style="background-image:url(assets/images/slide/bg1.jpg)">
                <div class="slider-content text-left">
                    <div class="col-md-12">
                        <h2 class="slide-title effect2">Empowering People</h2>
                        <h3 class="slide-sub-title effect3">To Improve Their Lives</h3>
                        <p class="slider-description lead effect3">Praesent convallis tortor et enim laoreet, vel
                            consectetur purus latoque.</p>
                        <p class="effect3">
                            <a href="#" class="slider btn btn-primary">Our Service</a>
                            <a href="#" class="slider btn btn-secondary">About Us</a>
                        </p>
                    </div>
                </div>
            </div><!--/ Carousel item 1 end -->


            <div class="item" style="background-image:url(assets/images/slide/bg2.jpg)">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title effect4">Of care every day</h2>
                        <h3 class="slide-sub-title effect5">Higher standards</h3>
                        <p>
                            <a href="#" class="slider btn btn-primary">Our Services</a>
                        </p>
                    </div>
                </div>
            </div><!--/ Carousel item 2 end -->


            <div class="item" style="background-image:url(assets/images/slide/bg1.jpg)">
                <div class="slider-content text-right">
                    <div class="col-md-12">
                        <h2 class="slide-title effect6">To better healthcare</h2>
                        <h3 class="slide-sub-title effect7">Leading the way</h3>
                        <p class="slider-description lead effect7">Praesent convallis tortor et enim laoreet, vel
                            consectetur purus latoque.</p>
                        <p>
                            <a href="#" class="slider btn btn-primary">Consultation</a>
                            <a href="#" class="slider btn btn-primary border">Know More</a>
                        </p>
                    </div>
                </div>
            </div><!--/ Carousel item 3 end -->

        </div><!-- Carousel inner end-->

        <!-- Controllers -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div><!--/ Carousel end -->
</section>
<section id="section1" class="section-margine">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="section-1-box wow bounceIn">
                    <div class="section-1-box-icon-background"><i class="fa fa-ambulance fa-2x"></i></div>
                    <h4 class="text-center">Emergency Servies</h4>
                    <p class="text-center">Using many font styles canslow down your webpage, so only select the font
                        styles that you</p>
                </div>
            </div>
            <div class="col-md-3  col-sm-6">
                <div class="section-1-box wow bounceIn" data-wow-delay=".1s">
                    <div class="section-1-box-icon-background"><i class="fa fa-user-md fa-2x"></i></div>
                    <h4 class="text-center">Medical Excellence</h4>
                    <p class="text-center">Using many font styles canslow down your webpage, so only select the font
                        styles that you</p>
                </div>
            </div>
            <div class="col-md-3  col-sm-6">
                <div class="section-1-box wow bounceIn" data-wow-delay=".2s">
                    <div class="section-1-box-icon-background"><i class="fa fa-h-square fa-2x"></i></div>
                    <h4 class="text-center">Diagnostic Imaging</h4>
                    <p class="text-center">Using many font styles canslow down your webpage, so only select the font
                        styles that you</p>
                </div>
            </div>
            <div class="col-md-3  col-sm-6">
                <div class="section-1-box wow bounceIn" data-wow-delay=".3s">
                    <div class="section-1-box-icon-background"><i class="fa fa fa-heartbeat fa-2x"></i></div>
                    <h4 class="text-center">Heart Surgery</h4>
                    <p class="text-center">Using many font styles canslow down your webpage, so only select the font
                        styles that you</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section2" class="section-margine">
    <div class="container">
        <div class="row">
            <div class="col-md-8 nopadding">
                <div class="col-md-6 col-sm-6">
                    <div class="section-2-box-left wow fadeInLeft">
                        <figure><img src="images/m1.jpg" class="img-responsive"></figure>
                        <h4>Medical Care</h4>
                        <p>Using many font styles canslow down your webpage, so only select the font styles that you
                            consectetur adipiscing elit, sed do eiusmod.</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="section-2-box-left wow fadeInLeft">
                        <figure><img src="images/m2.jpg" class="img-responsive"></figure>
                        <h4>Specific Remedy</h4>
                        <p>Using many font styles canslow down your webpage, so only select the font styles that you
                            consectetur adipiscing elit, sed do eiusmod.</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4  col-sm-12">
                <div class="section-2-box-right wow fadeInRight">
                    <h3>Opening Hours</h3>
                    <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely
                        deliverables for real-time schemas. Scrambled it to make a type specimen book. It has survived
                        not only five centuries.</p>
                    <ul>
                        <li>Monday - Friday : 8.00 - 16.00</li>
                        <li>Saturday : 9.30 - 15.30</li>
                        <li>Sunday : 9.30 - 17.00</li>
                    </ul>
                    <a data-toggle="modal" href="#appointment" class="btn btn-default">Book Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section3" class="section-margine section3-background">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="section-3-box">
                    <figure><i class="fa fa-desktop fa-2x"></i></figure>
                    <h3><span class="counter">1000</span>+</h3>
                    <h4>Doctors & Nurses</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="section-3-box">
                    <figure><i class="fa fa-group fa-2x"></i></figure>
                    <h3><span class="counter">1520</span>+</h3>
                    <h4>Total Rooms</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="section-3-box">
                    <figure><i class="fa fa-coffee fa-2x"></i></figure>
                    <h3><span class="counter">50</span>+</h3>
                    <h4>Cureds Cases</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="section-3-box">
                    <figure><i class="fa fa-glass fa-2x"></i></figure>
                    <h3><span class="counter">400</span>+</h3>
                    <h4>Awards Shows</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section4" class="section-4 section-margine">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="title-head">
                    <h2>Medical Services</h2>
                    <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    <div class="line-heading">
                        <span class="line-left"></span>
                        <span class="line-middle">+</span>
                        <span class="line-right"></span>
                    </div>
                </header>
            </div>
            <div class="col-md-4 col-sm-6 right wow fadeInUp">
                <ul class="section">
                    <li class="left"><i class="fa fa-medkit"></i></li>
                    <li><strong>Fixed Artificial Teeth</strong>
                        <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                        <a href="#" class="btn btn-primary btn-sm">Know More</a>
                </ul>
                <ul class="section two">
                    <li class="left"><i class="fa fa-stethoscope"></i></li>
                    <li><strong>Implantology</strong>
                        <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                        <a href="#" class="btn btn-primary btn-sm">Know More</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs left wow fadeInUp" data-wow-delay=".2s"><img alt=""
                                                                                                  src="images/m4.png">
            </div>
            <!-- end left -->
            <div class="col-md-4 col-sm-6 right wow fadeInUp" data-wow-delay=".3s">
                <ul class="section three">
                    <li class="left"><i class="fa fa-user-md"></i></li>
                    <li><strong>Procedure to teeth</strong>
                        <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                        <a href="#" class="btn btn-primary btn-sm">Know More</a>
                    </li>
                </ul>
                <ul class="section four">
                    <li class="left"><i class="fa fa-unlink"></i></li>
                    <li><strong>Metal braces</strong>
                        <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                        <a href="#" class="btn btn-primary btn-sm">Know More</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="section5" class="section-5 section-margine">
    <div class="container">
        <div class="row my-team">
            <div class="col-md-12">
                <header class="title-head">
                    <h2>Awesome Doctors Team</h2>
                    <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    <div class="line-heading">
                        <span class="line-left"></span>
                        <span class="line-middle">+</span>
                        <span class="line-right"></span>
                    </div>
                </header>
            </div>
            <div class="col-md-3 col-sm-6 my-team-member wow fadeInUp">
                <div class="my-member-img">
                    <img src="images/team/1.jpg" class="img-responsive" alt="team01">
                </div>
                <div class="my-team-detail text-center">
                    <h4 class="my-member-name">Turanga Parker</h4>
                    <p class="my-member-post">Director</p>
                    <div class="my-member-social">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 my-team-member wow fadeInUp" data-wow-delay=".2s">
                <div class="my-member-img">
                    <img src="images/team/2.jpg" class="img-responsive" alt="team02">
                </div>
                <div class="my-team-detail text-center">
                    <h4 class="my-member-name">Mariya Rayan</h4>
                    <p class="my-member-post">Manager</p>
                    <div class="my-member-social">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 my-team-member wow fadeInUp" data-wow-delay=".3s">
                <div class="my-member-img">
                    <img src="images/team/3.jpg" class="img-responsive" alt="team03">
                </div>
                <div class="my-team-detail text-center">
                    <h4 class="my-member-name">Jerry Hu</h4>
                    <p class="my-member-post">Sales Manager</p>
                    <div class="my-member-social">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 my-team-member wow fadeInUp" data-wow-delay=".2s">
                <div class="my-member-img">
                    <img src="images/team/4.jpg" class="img-responsive" alt="team04">
                </div>
                <div class="my-team-detail text-center">
                    <h4 class="my-member-name">Sara Rayan</h4>
                    <p class="my-member-post">Support</p>
                    <div class="my-member-social">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section10" class="section-10-background">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="section-10-box-text-cont">
                    <h3>We Are Ready to Check Your Health,<span class="color-yellow">  Call : +81-2356-65896</span></h3>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="section-10-btn-cont"><a href="#" class="btn btn-secondary wow fadeInUp">Get a quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section14" class="section-margine">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <header class="title-head">
                    <h2>Reent Post</h2>
                    <p>Using many font styles canslow down your webpage, so only select the font styles that you</p>
                    <div class="line-heading">
                        <span class="line-left"></span>
                        <span class="line-middle">+</span>
                        <span class="line-right"></span>
                    </div>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="section-14-box wow fadeInUp">
                    <img src="images/blog/blog-1.jpg" class="img-responsive" alt="Blog image 1">
                    <h3><a href="#">New Cancer Treatment</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="comments">
                                <a class="btn btn-primary btn-sm">July, 30, 30</a>
                                <a href="#" class="btn btn-primary btn-sm">rkwebdes</a>
                            </div>
                        </div>
                    </div>
                    <p>Laoreet eleifend condimentum urna odio inceptos bibendum curae imperdiet laoreet nunc tellus,
                        class ultricies vivamus primis.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="section-14-box wow fadeInUp" data-wow-delay=".2s">
                    <h3><a href="#">Surgery Advices</a></h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comments">
                                <a class="btn btn-primary btn-sm">July, 30, 30</a>
                                <a href="#" class="btn btn-primary btn-sm">rkwebdes</a>
                            </div>
                        </div>
                    </div>
                    <p>Laoreet eleifend condimentum urna odio inceptos bibendum curae imperdiet laoreet nunc tellus,
                        class ultricies vivamus primis.</p>
                    <img src="images/blog/blog-2.jpg" class="img-responsive" alt="Blog image 1">
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="section-14-box wow fadeInUp" data-wow-delay=".3s">
                    <img src="images/blog/blog-3.jpg" class="img-responsive" alt="Blog image 1">
                    <h3><a href="#">Medicine Sale Market</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="comments">
                                <a class="btn btn-primary btn-sm">July, 30, 30</a>
                                <a href="#" class="btn btn-primary btn-sm">rkwebdes</a>
                            </div>
                        </div>
                    </div>
                    <p>Laoreet eleifend condimentum urna odio inceptos bibendum curae imperdiet laoreet nunc tellus,
                        class ultricies vivamus primis.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section8" class="mytestimonial">
    <div class="container">
        <div class="row">
            <div data-ride="carousel" class="carousel slide" id="testimonial">
                <ol class="carousel-indicators">
                    <li data-target="#testimonial" data-slide-to="0" class="active"><img alt="Testimonial"
                                                                                         class="img-responsive"
                                                                                         src="images/people/1.jpg">
                    </li>
                    <li data-target="#testimonial" data-slide-to="1"><img alt="Testimonial" class="img-responsive"
                                                                          src="images/people/2.jpg">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item text-center quotes-detail active left">
                        <p class="client-quote"><i class="fa fa-quote-left"></i>Focus on what really matters: your
                            product. Create beautiful, unique websites with impact full landing pages and banners,
                            without any coding or design skills<i class="fa fa-quote-right "></i></p>
                        <h5 class="client-name">John</h5>
                    </div>
                    <div class="item text-center quotes-detail next left">
                        <p class="client-quote"><i class="fa fa-quote-left "></i>Focus on what really matters: your
                            product. Create beautiful, unique websites with impact full landing pages and banners,
                            without any coding or design skills<i class="fa fa-quote-right "></i></p>
                        <h5 class="client-name">John</h5>
                    </div>
                </div> <!-- end carosel-inner -->
            </div> <!-- end Quotes -->
        </div>
    </div>
</section>
<section id="section9" class="section-9-background">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="images/clients/1.png" class="img-responsive wow fadeInUp"
                                                         alt=""></div>
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="images/clients/2.png" class="img-responsive wow fadeInUp"
                                                         alt=""></div>
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="images/clients/3.png" class="img-responsive wow fadeInUp"
                                                         alt=""></div>
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="images/clients/4.png" class="img-responsive wow fadeInUp"
                                                         alt=""></div>
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="images/clients/5.png" class="img-responsive wow fadeInUp"
                                                         alt=""></div>
            <div class="col-md-2 col-sm-4 col-xs-6"><img src="images/clients/6.png" class="img-responsive wow fadeInUp"
                                                         alt=""></div>
        </div>
    </div>
</section>
<section id="section23" class="appointment">
    <div class="modal fade" id="appointment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog style-one" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Make an Appoinment</h4>
                </div>
                <div class="modal-body">
                    <div class="appoinment-form-outer">
                        <form action="" method="post">
                            <h4>Fill Up Appointment Form.</h4>
                            <div class="form-group">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" class="form-control" required="" placeholder="First Name" value=""
                                       name="name">
                            </div>
                            <div class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" class="form-control" required="" placeholder="Email" value=""
                                       name="name">
                            </div>
                            <div class="form-group">
                                <label>Phone <span class="required">*</span></label>
                                <input type="text" class="form-control" required="" placeholder="Phone" value=""
                                       name="name">
                            </div>
                            <div class="form-group">
                                <label>Age <span class="required">*</span></label>
                                <input type="text" class="form-control" required="" placeholder="age" value=""
                                       name="name">
                            </div>
                            <div class="form-group">
                                <label>Appoinment Date <span class="required">*</span></label>
                                <input class="datepicker form-control" type="text" required="" placeholder="MM/DD/Year"
                                       value="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Time<span class="required">*</span></label>
                                <input type="text" class="timepicker form-control" required="" placeholder="Time"
                                       value="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" class="form-control" required="" placeholder="Address" value=""
                                       name="name">
                            </div>
                            <div class="text-left">
                                <button type="button" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer-top" class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="footer-top-box">
                    <h4>About Us</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text</p>
                </div>
                <div class="footer-top-box">
                    <h4>Office Hour</h4>
                    <b>Mon-Fri :</b> 09am to 06pm<br/>
                    <b>Tues-Wed :</b> Special Appointment
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="footer-top-box">
                    <h4>Latest Posts</h4>
                    <ul>
                        <li>
                            <div class="recent-post-widget">
                                <a href="#" class="widget-img-thumb">
                                    <img src="images/post-1.jpg" class="img-responsive">
                                </a>
                                <div class="widget-content">
                                    <h5><a href="#" class="sidebar-item-title">Enterprise Video Solutions</a></h5>
                                    <a href="#">
                                        <p class="widget-date">Posted: 3 day ago</p>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="recent-post-widget">
                                <a href="#" class="widget-img-thumb">
                                    <img src="images/post-2.jpg" class="img-responsive">
                                </a>
                                <div class="widget-content">
                                    <h5><a href="#" class="sidebar-item-title">Medical Instruments</a></h5>
                                    <a href="#">
                                        <p class="widget-date">Posted: 6 month ago</p>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="footer-top-box">
                    <h4>Tags</h4>
                    <div class="tag"><a href="#">Acupuncture</a></div>
                    <div class="tag"><a href="#">Mammography</a></div>
                    <div class="tag"><a href="#">Neonatology</a></div>
                    <div class="tag"><a href="#">Diabetes Education</a></div>
                    <div class="tag"><a href="#">Geriatrics</a></div>
                    <div class="tag"><a href="#">Kidneys</a></div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="footer-top-box">
                    <h4>Contact us</h4>
                    <p><b>Location : 42/2</b> New road, KTM<br/>
                        <b>Mob: </b> +9849494875<br/>
                        <b>Mail: </b> rkwebdesignsinfo@gmail.com </p>
                </div>
                <div class="footer-top-box">
                    <h4>Subscribe</h4>
                    <div class="cs-form">
                        <form action="#" method="post">
                            <div class="input-holder">
                                <input type="email" placeholder="Enter Valid Email Address">
                                <label> <i class="fa fa-location-arrow fa-2x"></i>
                                    <input class="submit-bgcolor" type="submit" value="submit">
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer-bottom" class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="copyright">Copyright &copy; 2016. All Rights Reserved</div>
            </div>
            <div class="col-lg-3">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.plugin.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.isotope.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap-dropdownhover.min.js") }}"></script>
<script src="{{ asset("assets/js/wow.min.js") }}"></script>
<script src="{{ asset("assets/js/waypoints.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.counterup.min.js") }}"></script>
<script src="{{ asset("assets/js/main.js") }}"></script>
</body>
</html>
