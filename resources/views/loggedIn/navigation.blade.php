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
            <ul class="nav navbar-nav top-left-nav">
                <li class=""><a href="#">NBA</a></li>
                <li class=""><a href="#">NHL </a></li>
                <li class=""><a href="#">NBA</a></li>
                <li class=""><a href="#">MLB</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="page-scroll">Welcome {{$user}}!</li>
                <li class="page-scroll"> <a href="#">Blog</a> </li>
                <li class="page-scroll"> <a href="#">About </a> </li>
                <li class="page-scroll"> <a href="{{route('logout')}}">Log Out</a> </li>
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top"><img src="images/logo.png" width="90" height="90"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--<li class="hidden">-->
                <li class="page-scroll"> <a href="#">Team-1</a> </li>
                <li class="page-scroll"> <a href="#">Team-2</a> </li>
                <li class="page-scroll"> <a href="#">Team-3</a> </li>
                <li class="page-scroll"> <a href="#">Team-4</a> </li>
                <li class="page-scroll"> <a href="#">Team-5</a> </li>
                <li class="page-scroll"> <a href="#">Team-6</a> </li>
                <li class="dropdown more">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Team-7</a></li>
                        <li><a href="#">Team-8</a></li>
                        <li><a href="#">Team-9</a></li>
                        <li><a href="#">Team-10</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>