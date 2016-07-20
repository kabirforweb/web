<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fantasy</title>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

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
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="test/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="test/freelancer.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top" class="index">

<!-- About Section -->
<section class="login-sec pricing-sec clearfix" id="">

    <div class="text-center logo-top-img">
        <a href="index.html"><img width="90" height="90" src="img/logo-trans.png"></a>
    </div>

    @if (session()->get('action') == 'register' && Session::has('flash_notification.message'))
    <div class="alert alert-{{ Session::get('flash_notification.level') }} text-center signup_error">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_notification.message') }}
    </div>
    @endif

    <ul class="cd-pricing clearfix">
        <li>
            <header class="cd-pricing-header">
                <h2>Basic</h2>

                <div class="cd-price">
                    <span>$9.99</span>
                    <span>month</span>
                </div>
            </header> <!-- .cd-pricing-header -->

            <div class="cd-pricing-features">
                <ul>
                    <li class="available"><em>Feature 1</em></li>
                    <li><em>Feature 2</em></li>
                    <li><em>Feature 3</em></li>
                    <li><em>Feature 4</em></li>
                </ul>
            </div> <!-- .cd-pricing-features -->

            <footer class="cd-pricing-footer">
                <a class="btn btn-lg btn-color" href="#0">Select</a>
            </footer> <!-- .cd-pricing-footer -->
        </li>

        <li>
            <header class="cd-pricing-header">
                <h2>Popular</h2>

                <div class="cd-price">
                    <span>$19.99</span>
                    <span>month</span>
                </div>
            </header> <!-- .cd-pricing-header -->

            <div class="cd-pricing-features">
                <ul>
                    <li class="available"><em>Feature 1</em></li>
                    <li class="available"><em>Feature 2</em></li>
                    <li><em>Feature 3</em></li>
                    <li><em>Feature 4</em></li>
                </ul>
            </div> <!-- .cd-pricing-features -->

            <footer class="cd-pricing-footer">
                <a class="btn btn-lg btn-color" href="#0">Select</a>
            </footer> <!-- .cd-pricing-footer -->
        </li>

        <li>
            <header class="cd-pricing-header">
                <h2>Premier</h2>

                <div class="cd-price">
                    <span>$29.99</span>
                    <span>month</span>
                </div>
            </header> <!-- .cd-pricing-header -->

            <div class="cd-pricing-features">
                <ul>
                    <li class="available"><em>Feature 1</em></li>
                    <li class="available"><em>Feature 2</em></li>
                    <li class="available"><em>Feature 3</em></li>
                    <li class="available"><em>Feature 4</em></li>
                </ul>
            </div> <!-- .cd-pricing-features -->

            <footer class="cd-pricing-footer">
                <a class="btn btn-lg btn-color" href="#0">Select</a>
            </footer> <!-- .cd-pricing-footer -->
        </li>
    </ul> <!-- .cd-pricing -->

    <div class="cd-form">

        <div class="cd-plan-info">
            <!-- content will be loaded using jQuery - according to the selected plan -->
        </div>

        <div class="cd-more-info">
            <h3>Need help?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>


        <form id="signupform" role="form" method="post" action="{{route('register')}}">

            {{csrf_field()}}

            <fieldset>
                <legend>Account Info</legend>

                <div class="half-width">
                    <label for="userName">First Name</label>
                    <input type="text" id="firstname" name="firstname" required="required">
                </div>

                <div class="half-width">
                    <label for="userName">last Name</label>
                    <input type="text" id="lastname" name="lastname" required="required">
                </div>

                <div class="half-width">
                    <label for="userEmail">Email</label>
                    <input type="email" id="email" name="email" required="required">
                </div>

                <div class="half-width">
                    <label for="userPassword">Password</label>
                    <input type="password" id="pword" name="password" required="required">
                </div>

                <div class="half-width">
                    <label for="userPasswordRepeat">Repeat Password</label>
                    <input type="password" id="cpword" name="confirm_password" required="required">
                </div>
            </fieldset>

            <fieldset>
                <legend>Payment Method</legend>

                <div>
                    <ul class="cd-payment-gateways">
                        <li>
                            <input type="radio" name="payment-method" id="paypal" value="paypal">
                            <label for="paypal">Paypal</label>

                            <input type="radio" name="payment-method" id="card" value="card" checked>
                            <label for="card">Card</label>
                        </li>
                    </ul> <!-- .cd-payment-gateways -->
                </div>

                <div class="cd-credit-card">
                    <div>
                        <p class="half-width">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" id="cardNumber" name="cardNumber">
                        </p>

                        <p class="half-width">
                            <label>Expiration date</label>
                            <b>
										<span class="cd-select">
											<select name="card-expiry-month" id="card-expiry-month">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                                <option value="1">6</option>
                                                <option value="1">7</option>
                                                <option value="1">8</option>
                                                <option value="1">9</option>
                                                <option value="1">10</option>
                                                <option value="1">11</option>
                                                <option value="1">12</option>
                                            </select>
										</span>
		
										<span class="cd-select">
											<select name="card-expiry-year" id="card-expiry-year">
                                                <option value="2015">2015</option>
                                                <option value="2015">2016</option>
                                                <option value="2015">2017</option>
                                                <option value="2015">2018</option>
                                                <option value="2015">2019</option>
                                                <option value="2015">2020</option>
                                            </select>
										</span>
                            </b>
                        </p>

                        <p class="half-width">
                            <label for="cardCvc">Card CVC</label>
                            <input type="text" id="cardCvc" name="cardCvc">
                        </p>
                    </div>
                </div> <!-- .cd-credit-card -->
            </fieldset>

            <fieldset>
                <div>
                    <input class="btn btn-lg btn-color" type="submit" value="Get started" id="signup_submit">
                </div>
            </fieldset>
        </form>

        <a href="#0" class="cd-close"></a>
    </div> <!-- .cd-form -->

    <div class="cd-overlay"></div> <!-- shadow layer -->


</section>











<!-- Footer -->
<footer class="text-center ">
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
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
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
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
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
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
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
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
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
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
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
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
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

<link rel="stylesheet" href="css/custom.css">
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/freelancer.min.js"></script>

<script src="js/velocity.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script>
    $(document).ready(function(){
        $('#signup_submit').click(function(e){

            e.preventDefault();
            console.log(validateEmail($('#email').val());
            if($('#firstname').val() == '' ||
                $('#lastname').val() == '' ||
                $('#email').val()    == '' ||
                $('#pword').val() == '' ||
                $('#cpword').val() == ''
             ){
                alert('Please make sure to fill all the fields');
                $('#firstname').focus();
                return false;
            }


            if( $('#pword').val() != $('#cpword').val()){
                alert('Both password and confirm password should be same');
                return false;
            }
            $(this).parents('form').submit();
        });

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    });

</script>
</body>

</html>
