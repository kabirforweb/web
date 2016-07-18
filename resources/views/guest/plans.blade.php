@extends('guest.master')
@include('guest.head')

<body>

<header class="cd-main-header">
    <h1>Animated Sign Up Flow</h1>
</header>

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
                    <a href="{{route('login')}}">Login</a>
                </li>
                <li class="page-scroll">
                    <a href="{{route('signup')}}">Signup</a>
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

                <li class="">
                    <a href="{{route('plans')}}">Plans</a>
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

<ul class="cd-pricing">
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
            <a href="#0">Select</a>
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
            <a href="#0">Select</a>
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
            <a href="#0">Select</a>
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

    <form action="">
        <fieldset>
            <legend>Account Info</legend>

            <div class="half-width">
                <label for="userName">Name</label>
                <input type="text" id="userName" name="userName">
            </div>

            <div class="half-width">
                <label for="userEmail">Email</label>
                <input type="email" id="userEmail" name="userEmail">
            </div>

            <div class="half-width">
                <label for="userPassword">Password</label>
                <input type="password" id="userPassword" name="userPassword">
            </div>

            <div class="half-width">
                <label for="userPasswordRepeat">Repeat Password</label>
                <input type="password" id="userPasswordRepeat" name="userPasswordRepeat">
            </div>
        </fieldset>

        <fieldset>
            <legend>Payment Method</legend>

            <div>
                <ul class="cd-payment-gateways">
                    <li>
                        <input type="radio" name="payment-method" id="paypal" value="paypal">
                        <label for="paypal">Paypal</label>
                    </li>

                    <li>
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
                <input type="submit" value="Get started">
            </div>
        </fieldset>
    </form>

    <a href="#0" class="cd-close"></a>
</div> <!-- .cd-form -->
<!-- Footer -->

@include('guest.footer')

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{asset('css/reset.css')}}"> <!-- CSS reset -->
<link rel="stylesheet" href="{{asset('css/style.css')}}"> <!-- Resource style -->
<script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizer -->

<div class="cd-overlay"></div> <!-- shadow layer -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/velocity.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script> <!-- Resource jQuery -->
<link rel="stylesheet" href="{{asset('css/custom.css')}}"> <!-- CSS reset -->

@include('guest.styles')
</body>
</html>