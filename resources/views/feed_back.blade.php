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
    @toastr_css
</head>
<body>
<header id="header" class="head">
    <div class="top-header">
        <div class="container">
            <div class="row ">
                <ul class="contact-detail2 col-sm-6 pull-left">
                    <li><a href="#" target="_blank"><i class="fa fa-mobile"></i>Call US + 1 (1800) 459 123 7</a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-envelope-o"></i> example@gmail.com</a></li>
                </ul>
                <div class="social-links col-sm-6 pull-right">
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
                <a class="navbar-brand" href="index.html">
                    <div class="logo-text"><span><samp>M</samp>Medi</span>camp</div>
                    <!-- <img src="images/logo.png" alt="logo"> -->
                </a>
            </div>
        @include("menu")
        <!--/.nav-collapse -->
        </div>
    </nav>
</header>
<section id="inner-title" class="inner-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h2>Feed Back</h2>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="breadcrumbs">
                    <ul>
                        <li>Current Page:</li>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html">Feed Back</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section16" class="section16">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <form action="{{ route("feedback.store") }}" method="post">
                @csrf
                <!-- successfully -->
                    <p class="success alert alert-success"><i class="fa fa-check"></i> Your message has been sent
                        successfully. </p>
                    <!-- unsuccessfully -->
                    <p class="error alert alert-danger"><i class="fa fa-times"></i> E-mail must be valid and message
                        must be longer than 1 character. </p>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input class="form-control" id="cf-name" type="text" name="name" placeholder="NAME">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input class="form-control" id="cf-email" type="email" name="email" placeholder="EMAIL">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input class="form-control" id="cf-subject" type="text" name="subject"
                                   placeholder="SUBJECT">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea class="form-control custom-control" id="cf-message" rows="4" name="message"
                                      placeholder="HOW CAN I HELP? "></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                </form>
            </div>
            <div class="col-md-6 col-lg-6 text-center">
                <img src="uploads/feed.jpg" alt="">
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
                </ul>
            </div>
        </div>
    </div>
</section>

@jquery
@toastr_js
@toastr_render

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
