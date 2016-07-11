@extends('guest.master')

</head>

<body id="page-top" class="index">

<!-- Navigation1 -->
<nav id="" class="navbar navbar-default navbar-fixed-top navbar-custom white-custom-nav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- <div class="navbar-header page-scroll">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
             </button>
             <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
         </div>-->


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">


                <li class="page-scroll">
                    <a href="login.html">Login</a>
                </li>
                <li class="page-scroll">
                    <a href="login.html">Signup</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>



<!-- Navigation2 -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom red-custom-nav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top"><img src="{{asset('images/logo.png')}}" width="90" height="90"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!--<li class="hidden">-->
                <li class="page-scroll">
                    <a href="#page-top">Home</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About Us</a>
                </li>
                <li class="page-scroll">
                    <a href="#service">Services</a>
                </li>

                <li class="page-scroll">
                    <a href="#feature">Feature</a>
                </li>

                <li class="page-scroll">
                    <a href="#testimonial">Testimonial</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="main-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="intro-text text-left banner-text">
                    <span class="name">LineUp Beast</span>
                       
                        <span class="skills"> Sed vel gravida nunc, ac cursus eros. Pellentesque sollicitudin est vitae<br>
 
                        ligula rhoncus condimentum. Donec et lacus nibh.<br>
 Ut eleifend pellentesque eros nec posuere.</span>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- About Section -->
<section class="about-container" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
                <!--<hr class="star-light">--><hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Nulla sed ipsum in purus porta hendrerit vitae in felis. Vivamus mattis est quis rutrum tincidunt.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor consequat libero, in pretium nisl
                    bibendum et. Praesent sagittis et sem a blandit. Sed venenatis erat eget lacus porttitor pulvinar.
                    Maecenas sagittis lacus augue, eget auctor est maximus id. Cras sed ex est. <br>
                    <br>
                    Donec sapien ex, hendrerit eget eleifend nec, consequat vel lacus. Nulla sed ipsum in purus porta
                    hendrerit vitae in felis. Vivamus mattis est quis rutrum tincidunt. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Proin auctor consequat libero, in pretium nisl bibendum et.
                    Praesent sagittis et sem a blandit. Sed venenatis erat eget lacus porttitor pulvinar. Maecenas
                    sagittis lacus augue, eget auctor est maximus id. Cras sed ex est. </p>
            </div>

            <div class="col-lg-12  text-center">
                <a href="#" class="btn btn-lg btn-outline">
                    <!--<i class="fa fa-download"></i>--> Order Now
                </a>
            </div>
        </div>
    </div>
</section>


<section class="service-container" id="service">
    <div class="container">
        <div class="service-head text-center">
            <h2>Services</h2>
            <hr class="star-light">
            <span> </span>
        </div>
        <!--- services-grids --->
        <div class="services-grids text-center">
            <div class="col-md-4">
                <div data-wow-delay="0.4s" class="service-grid wow bounceIn animated" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                    <span class="service-icon1"> </span>
                    <h3><a href="#">Beautiful Designs</a></h3>
                    <p>Proin iaculis purus consequat sem digni ssim. Donec porttitora entum aenean rhoncus posuere odio in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div data-wow-delay="0.4s" class="service-grid wow bounceIn animated" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                    <span class="service-icon2"> </span>
                    <h3><a href="#">web development</a></h3>
                    <p>Proin iaculis purus consequat sem digni ssim. Donec porttitora entum aenean rhoncus posuere odio in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div data-wow-delay="0.4s" class="service-grid wow bounceIn animated" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
                    <span class="service-icon3"> </span>
                    <h3><a href="#">24/7 Support</a></h3>
                    <p>Proin iaculis purus consequat sem digni ssim. Donec porttitora entum aenean rhoncus posuere odio in.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--- services-grids --->
    </div>
</section>



<div class="expertise feature-container" id="feature">
    <div class="expertice-grids">
        <div data-wow-delay="0.4s" class="col-md-7 expertice-left-grid wow fadeInLeft animated" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
            <div class="expertise-head text-center">
                <h3>Feature</h3>
                <p>Proin iaculis purus consequat sem cure  digni ssim. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt consequat sem cure  digni ssim. </p>
            </div>
            <div class="expertise-left-inner-grids">
                <div class="e-left-inner-grid">
                    <div class="e-left-inner-grid-left">
                        <span class="e-icon1"> </span>
                    </div>
                    <div class="e-left-inner-grid-right">
                        <h4>Custom setup</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="e-left-inner-grid">
                    <div class="e-left-inner-grid-left">
                        <span class="e-icon2"> </span>
                    </div>
                    <div class="e-left-inner-grid-right">
                        <h4>Cloud control</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="e-left-inner-grid">
                    <div class="e-left-inner-grid-left">
                        <span class="e-icon3"> </span>
                    </div>
                    <div class="e-left-inner-grid-right">
                        <h4>All star support team</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="e-left-inner-grid">
                    <div class="e-left-inner-grid-left">
                        <span class="e-icon4"> </span>
                    </div>
                    <div class="e-left-inner-grid-right">
                        <h4>top notch security</h4>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <a href="#" class="btn btn-lg btn-outline">Learn more</a>
        </div>
        <div data-wow-delay="0.4s" class="col-md-5 expertice-right-grid wow fadeInRight animated" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">

        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- Portfolio Grid Section -->
<section class="testi-container" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Testimonial</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">

            <div class="col-md-12" data-wow-delay="0.2s">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">

                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>




        </div>
    </div>
</section>



<!-- Contact Section -->
<section id="contact" class="contact-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="pbtn-color btn btn-lg btn-outline">Send</button>
                            <a class="btn btn-lg btn-outline" href="#">Send</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About LINEUP BEAST</h3>
                    <p>Aenean tempus pharetra consectetur. Vestibulum auctor erat in aliquam vulputate.
                        <a href="http://startbootstrap.com">Vestibulum auctor</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2016
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="{{asset('images/portfolio/cabin.png')}}" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="{{asset('images/portfolio/cake.png')}}" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="{{asset('images/portfolio/circus.png')}}" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="{{asset('images/portfolio/game.png')}}" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="{{asset('images/portfolio/safe.png')}}" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="{{asset('images/portfolio/submarine.png')}}" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project.
                            The icon above is part of a free icon set by
                            <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download
                            their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')

<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Bootstrap Core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Theme CSS -->
<link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('js/freelancer.min.js')}}"></script>

    <script src="{{asset('js/wow.min.js')}}"></script>

    <script>
        new WOW().init();
    </script>
    <!---- animated-css ---->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

@endsection
</body>

</html>
