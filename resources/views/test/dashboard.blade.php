<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fantasy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/owl.theme.css"/>
    <link rel="stylesheet" href="css/new.css"/>
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
            <ul class="nav navbar-nav top-left-nav">
                <li class=""><a href="#">NBA</a></li>
                <li class=""><a href="#">NHL </a></li>
                <li class=""><a href="#">NBA</a></li>
                <li class=""><a href="#">MLB</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="page-scroll"><a href="" class="no_click"> Welcome <span class="user_name"><strong>{{$user}}!</strong></span></a></li>
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
            <a class="navbar-brand" href="#page-top"><img src="img/logo.png" width="90" height="90"></a>
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

<!-- About Section -->
<?php //echo '<pre>'; print_r($upcomingMatches); die;?>
<section class="sub-content">
<div class="topslider">
    <div class="container">
        <div class="topslider-wrap">
            <div class="topsliderleft"><a href="#">ALL MATCHUPS</a> </div>
            <div class="topsliderright">
                <div id="owl-demo" class="owl-carousel" >
                    @foreach($upcomingMatches as $match)
                    <?php
                    $c =  \Carbon\Carbon::parse($match->DateTime);

                    ?>
                        <div class="item">

                            <div class="item-wrap"> <span class="date">{{$c->formatLocalized('%B')}} {{$c->day}} @ {{$c->hour}}:{{$c->minute}} ET</span>
                            <div class="team-info">
                                <dl class="dl-horizontal">
                                    <dt>
                                    <div class="radio radio-cstm">
                                        <input type="radio" id="iba" name="team">
                                        <label for="iba">{{$match->HomeTeam}}</label>
                                    </div>
                                    </dt>
                                    <dd>o205</dd>
                                    <dt>
                                    <div class="radio radio-cstm">
                                        <input type="radio" id="ina" name="team">
                                        <label for="ina">{{$match->AwayTeam}}</label>
                                    </div>
                                    </dt>
                                    <dd>-5.50 tFAV</dd>
                                </dl>
                            </div>
                            <div class="weather-info"><img src="img/weather-icon.png" alt=""><span>62%</span> Rain </div>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-wrap">
<div class="container">
<div class="contest-scoring-sec clearfix">
    <div class="pull-left">
        <div class="match-type">DRAFTKINGS</div>
        <div class="nxt-contest">NEXT CONTEST : Apr 10 @ 330 PMT</div>
    </div>
    <div class="pull-right">
        <div class="scoring-unit">
            <h5>Scoring </h5>
            <p>this get filled with scroging site infor</p>
        </div>
    </div>
</div>
<div class="position-tab-sec">

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-tabs-title">Select Position:</li>
    <li role="presentation" class="active"><a href="#allP" aria-controls="home" role="tab" data-toggle="tab">ALL</a></li>
    <li role="presentation"><a href="#pg" aria-controls="profile" role="tab" data-toggle="tab">PG</a></li>
    <li role="presentation"><a href="#sg" aria-controls="messages" role="tab" data-toggle="tab">SG</a></li>
    <li role="presentation"><a href="#sf" aria-controls="settings" role="tab" data-toggle="tab">SF</a></li>
    <li role="presentation"><a href="#pf" aria-controls="settings" role="tab" data-toggle="tab">PF</a></li>
    <li role="presentation"><a href="#c" aria-controls="settings" role="tab" data-toggle="tab">C</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="allP">
<div class="filter-sec">
    <form role="form">
        <div class="filter-nav">
            <ul class="clearfix">
                <li class="active"><a href="#">Projections</a></li>
                <li><a href="#">Saved Lineups</a></li>
                <li><a href="#">Performance History</a></li>
            </ul>
        </div>
        <div class="filter-top clearfix">
            <div class="five-col">
                <div class="form-group">
                    <label>Consistency Range <span class="info-toltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></span></label>
                    <input class="range-slider-demo form-control" type="hidden" value="50" />
                </div>
            </div>
            <div class="five-col">
                <div class="form-group">
                    <label>Value Range <span class="info-toltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></span></label>
                    <input class="range-slider-demo form-control" type="hidden" value="50" />
                </div>
            </div>
            <div class="five-col">
                <div class="form-group">
                    <label>Salary Range <span class="info-toltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></span></label>
                    <input class="range-slider-demo form-control" type="hidden" value="50" />
                </div>
            </div>
            <div class="five-col">
                <div class="form-group">
                    <label>Projected Range <span class="info-toltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></span></label>
                    <input class="range-slider-demo form-control" type="hidden" value="50" />
                </div>
            </div>
            <div class="five-col">
                <div class="form-group">
                    <label>Batting Order <span class="info-toltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></span></label>
                    <input class="range-slider-demo form-control" type="hidden" value="50" />
                </div>
            </div>
        </div>
        <div class="filter-botom clearfix">
            <div class="seven-col">My Projections <span class="caret"></span></div>
            <div class="five-col">
                <div class="form-group">
                    <label>Number of lineups <span class="info-toltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></span></label>
                    <input class="range-slider-demo form-control" type="hidden" value="50" />
                </div>
            </div>
        </div>
    </form>
</div>
<div class="player-tab-sec">

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#show" aria-controls="home" role="tab" data-toggle="tab">
            <div class="badge-wrap">Show</div>
        </a></li>
    <li role="presentation"><a href="#allPLR" aria-controls="profile" role="tab" data-toggle="tab">
            <div class="badge-wrap">All <span class="badge">358</span></div>
        </a></li>
    <li role="presentation"><a href="#pool" aria-controls="messages" role="tab" data-toggle="tab">
            <div class="badge-wrap">My Pool <span class="badge">114</span></div>
        </a></li>
    <li role="presentation"><a href="#excluded" aria-controls="settings" role="tab" data-toggle="tab">
            <div class="badge-wrap">Excluded Players <span class="badge">14</span></div>
        </a></li>
    <li role="presentation"><a href="#locks" aria-controls="settings" role="tab" data-toggle="tab">
            <div class="badge-wrap">Locks <span class="badge">0 | $0</span></div>
        </a></li>
    <li role="presentation"><a href="#injuries" aria-controls="settings" role="tab" data-toggle="tab">
            <div class="badge-wrap">Injuries <span class="badge">80</span></div>
        </a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="show">
<div class="player-table table-color table-responsive">
<table class="panel-group table table-bordered table-condensed" style="border-collapse:collapse;">
<thead>
<tr>
    <th> <div class="select-search-wrap clearfix">
            <div class="checkbox-all">
                <div class="checkbox checkbox-cstm">
                    <input type="checkbox" id="checkAll"/>
                    <label for="checkAll"></label>
                </div>
                <i class="fa fa-caret-down"></i> </div>
            <div class="search-unit"> <i class="fa fa-search"></i>
                <input type="search" class="form-control" />
            </div>
            <div class="pull-right po-txt">Pos</div>
        </div>
    </th>
    <th>Team</th>
    <th>Opp</th>
    <th>Vs. Pitcher</th>
    <th>Hand</th>
    <th>ERA/AVG</th>
    <th>wOBA</th>
    <th>ISO</th>
    <th>Order</th>
    <th>Salary</th>
    <th>Ceiling</th>
    <th>Avg</th>
    <th>FC Proj</th>
    <th>MY Proj</th>
    <th>Expo.</th>
    <th>Cons.<br>
        Value</th>
</tr>
</thead>
<tbody>

    <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle collapsed odd">
    <td><div class="select-search-wrap clearfix">
            <div class="player-checkbox">
                <div class="checkbox checkbox-cstm">
                    <input type="checkbox" id="check1"/>
                    <label for="check1"></label>
                </div>
            </div>
            <div class="player-name"><strong>jon dalson</strong></div>
            <div class="player-fetur-icon"> <span><i class="fa fa-balance-scale"></i></span> <span><i class="fa fa-unlock-alt"></i></span> <span><i class="fa fa-thumbs-o-up"></i></span> <span><i class="fa fa-thumbs-o-down"></i></span> </div>
            <div class="pull-right po-txt">OF</div>
        </div></td>
    <td>Row</td>
    <td>VS BOS</td>
    <td>WRIGHT,R4.09</td>
    <td>R</td>
    <td>0.289</td>
    <td>0.392</td>
    <td>0.280</td>
    <td>2</td>
    <td>6000</td>
    <td>23.25</td>
    <td>5.27</td>
    <td>5.27</td>
    <td>100% </td>
    <td>50</td>
    <td>0.9</td>
</tr>
<tr class="expand-row">
    <td colspan="16" class="hiddenRow"><div class="accordian-body collapse" id="demo1">
            <table class="table">
                <tbody>
                <tr>
                    <td class="player-info-expnd-td"><div class="player-info-expnd">
                            <div class="player-title-expnd">@12 QB <span>Induspoints Cotics</span></div>
                            <div class="player-pic-expnd"> <img src="img/player-pic.jpg" alt=""> </div>
                            <div class="player-view-expnd"> <a href="#" class="btn btn-success btn-block">View player profile</a> </div>
                        </div></td>
                    <td class="player-avg-expnd-td"><div class="player-avg-expnd"> <img src="img/chart-img.jpg" alt=""> </div></td>
                    <td class="player-total-expnd-td"><div class="player-total-expnd"> <img src="img/game-total-img.jpg" alt=""> </div></td>
                </tr>
                </tbody>
            </table>
        </div></td>
</tr>
<tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle collapsed even">
    <td><div class="select-search-wrap clearfix">
            <div class="player-checkbox">
                <div class="checkbox checkbox-cstm">
                    <input type="checkbox" id="check1"/>
                    <label for="check1"></label>
                </div>
            </div>
            <div class="player-name"><strong>jon dalson</strong></div>
            <div class="player-fetur-icon"> <span><img src="img/icon-1.png" class="img-responsive"/></span> <span><img src="img/icon-2.png" class="img-responsive"/></span> <span><img src="img/icon-3.png" class="img-responsive"/></span> <span><img src="img/icon-4.png" class="img-responsive"/></span> </div>
            <div class="pull-right po-txt">OF</div>
        </div></td>
    <td>Row</td>
    <td>VS BOS</td>
    <td>WRIGHT,R4.09</td>
    <td>R</td>
    <td>0.289</td>
    <td>0.392</td>
    <td>0.280</td>
    <td>2</td>
    <td>6000</td>
    <td>23.25</td>
    <td>5.27</td>
    <td>5.27</td>
    <td>100% </td>
    <td>50</td>
    <td>0.9</td>
</tr>
<tr class="expand-row">
    <td colspan="16" class="hiddenRow"><div class="accordian-body collapse" id="demo2">
            <table class="table">
                <tbody>
                <tr>
                    <td class="player-info-expnd-td"><div class="player-info-expnd">
                            <div class="player-title-expnd">@12 QB <span>Induspoints Cotics</span></div>
                            <div class="player-pic-expnd"> <img src="img/player-pic.jpg" alt=""> </div>
                            <div class="player-view-expnd"> <a href="#" class="btn btn-success btn-block">View player profile</a> </div>
                        </div></td>
                    <td class="player-avg-expnd-td"><div class="player-avg-expnd"> <img src="img/chart-img.jpg" alt=""> </div></td>
                    <td class="player-total-expnd-td"><div class="player-total-expnd"> <img src="img/game-total-img.jpg" alt=""> </div></td>
                </tr>
                </tbody>
            </table>
        </div></td>
</tr>
<tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle collapsed odd">
    <td><div class="select-search-wrap clearfix">
            <div class="player-checkbox">
                <div class="checkbox checkbox-cstm">
                    <input type="checkbox" id="check1"/>
                    <label for="check1"></label>
                </div>
            </div>
            <div class="player-name"><strong>jon dalson</strong></div>
            <div class="player-fetur-icon"> <span><i class="fa fa-balance-scale"></i></span> <span><i class="fa fa-unlock-alt"></i></span> <span><i class="fa fa-thumbs-o-up"></i></span> <span><i class="fa fa-thumbs-o-down"></i></span> </div>
            <div class="pull-right po-txt">OF</div>
        </div></td>
    <td>Row</td>
    <td>VS BOS</td>
    <td>WRIGHT,R4.09</td>
    <td>R</td>
    <td>0.289</td>
    <td>0.392</td>
    <td>0.280</td>
    <td>2</td>
    <td>6000</td>
    <td>23.25</td>
    <td>5.27</td>
    <td>5.27</td>
    <td>100% </td>
    <td>50</td>
    <td>0.9</td>
</tr>
<tr class="expand-row">
    <td colspan="16" class="hiddenRow"><div class="accordian-body collapse" id="demo3">
            <table class="table">
                <tbody>
                <tr>
                    <td class="player-info-expnd-td"><div class="player-info-expnd">
                            <div class="player-title-expnd">@12 QB <span>Induspoints Cotics</span></div>
                            <div class="player-pic-expnd"> <img src="img/player-pic.jpg" alt=""> </div>
                            <div class="player-view-expnd"> <a href="#" class="btn btn-success btn-block">View player profile</a> </div>
                        </div></td>
                    <td class="player-avg-expnd-td"><div class="player-avg-expnd"> <img src="img/chart-img.jpg" alt=""> </div></td>
                    <td class="player-total-expnd-td"><div class="player-total-expnd"> <img src="img/game-total-img.jpg" alt=""> </div></td>
                </tr>
                </tbody>
            </table>
        </div></td>
</tr>
<tr data-toggle="collapse" data-target="#demo4" class="accordion-toggle collapsed even">
    <td><div class="select-search-wrap clearfix">
            <div class="player-checkbox">
                <div class="checkbox checkbox-cstm">
                    <input type="checkbox" id="check1"/>
                    <label for="check1"></label>
                </div>
            </div>
            <div class="player-name"><strong>jon dalson</strong></div>
            <div class="player-fetur-icon"> <span><img src="img/icon-1.png" class="img-responsive"/></span> <span><img src="img/icon-2.png" class="img-responsive"/></span> <span><img src="img/icon-3.png" class="img-responsive"/></span> <span><img src="img/icon-4.png" class="img-responsive"/></span> </div>
            <div class="pull-right po-txt">OF</div>
        </div></td>
    <td>Row</td>
    <td>VS BOS</td>
    <td>WRIGHT,R4.09</td>
    <td>R</td>
    <td>0.289</td>
    <td>0.392</td>
    <td>0.280</td>
    <td>2</td>
    <td>6000</td>
    <td>23.25</td>
    <td>5.27</td>
    <td>5.27</td>
    <td>100% </td>
    <td>50</td>
    <td>0.9</td>
</tr>
<tr class="expand-row">
    <td colspan="16" class="hiddenRow"><div class="accordian-body collapse" id="demo4">
            <table class="table">
                <tbody>
                <tr>
                    <td class="player-info-expnd-td"><div class="player-info-expnd">
                            <div class="player-title-expnd">@12 QB <span>Induspoints Cotics</span></div>
                            <div class="player-pic-expnd"> <img src="img/player-pic.jpg" alt=""> </div>
                            <div class="player-view-expnd"> <a href="#" class="btn btn-success btn-block">View player profile</a> </div>
                        </div></td>
                    <td class="player-avg-expnd-td"><div class="player-avg-expnd"> <img src="img/chart-img.jpg" alt=""> </div></td>
                    <td class="player-total-expnd-td"><div class="player-total-expnd"> <img src="img/game-total-img.jpg" alt=""> </div></td>
                </tr>
                </tbody>
            </table>
        </div></td>
</tr>
</tbody>
</table>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="allPLR">settings</div>
<div role="tabpanel" class="tab-pane" id="pool">messages</div>
<div role="tabpanel" class="tab-pane" id="excluded">settings</div>
<div role="tabpanel" class="tab-pane" id="locks">messages</div>
<div role="tabpanel" class="tab-pane" id="injuries">profile</div>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="pg">settings</div>
<div role="tabpanel" class="tab-pane" id="sg">messages</div>
<div role="tabpanel" class="tab-pane" id="sf">settings</div>
<div role="tabpanel" class="tab-pane" id="pf">messages</div>
<div role="tabpanel" class="tab-pane" id="c">profile</div>
</div>
</div>
<div class="team-slider footer">
<div class="">
<div class="f-top">
<div class="span12">
<div id="owl-demo1" class="owl-carousel">
<div class="item">
    <div class="st-hover">
        <div class="f-slider-title">
            <p>lorem ipsum dolram</p>
            <h1>42</h1>
        </div>
        <div class="ft-footer">
            <table class="table">
                <tr>
                    <td class="ft-title">lorem ipsum dolram</td>
                    <td class="ft-s-icon"><i class="fa fa-floppy-o" aria-hidden="true"></i></td>
                    <td class="ft-d-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    <td class="ft-r-icon"><i class="fa fa-reply" aria-hidden="true"></i></td>
                    <td class="ft-set-icon"><i class="fa fa-cogs" aria-hidden="true"></i></td>
                </tr>
            </table>
        </div>
        <div class="ft2-footer">
            <table class="table">
                <tr>
                    <td class="ft-name">Name</td>
                    <td class="ft-pos">Pos</td>
                    <td class="ft-salary">Salary</td>
                    <td class="ft-opp">Opp</td>
                    <td class="ft-team">Team</td>
                    <td class="ft-fp">Fp</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
            </table>
        </div>
        <div class="ft-end-title">
            <h1>175.5</h1>
            <p>points</p>
        </div>
    </div>
</div>

<div class="item">
    <div class="st-hover">
        <div class="f-slider-title">
            <p>lorem ipsum dolram</p>
            <h1>42</h1>
        </div>
        <div class="ft-footer">
            <table class="table">
                <tr>
                    <td class="ft-title">lorem ipsum dolram</td>
                    <td class="ft-s-icon"><i class="fa fa-floppy-o" aria-hidden="true"></i></td>
                    <td class="ft-d-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    <td class="ft-r-icon"><i class="fa fa-reply" aria-hidden="true"></i></td>
                    <td class="ft-set-icon"><i class="fa fa-cogs" aria-hidden="true"></i></td>
                </tr>
            </table>
        </div>
        <div class="ft2-footer">
            <table class="table">
                <tr>
                    <td class="ft-name">Name</td>
                    <td class="ft-pos">Pos</td>
                    <td class="ft-salary">Salary</td>
                    <td class="ft-opp">Opp</td>
                    <td class="ft-team">Team</td>
                    <td class="ft-fp">Fp</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
            </table>
        </div>
        <div class="ft-end-title">
            <h1>175.5</h1>
            <p>points</p>
        </div>
    </div>
</div>

<div class="item">
    <div class="st-hover">
        <div class="f-slider-title">
            <p>lorem ipsum dolram</p>
            <h1>42</h1>
        </div>
        <div class="ft-footer">
            <table class="table">
                <tr>
                    <td class="ft-title">lorem ipsum dolram</td>
                    <td class="ft-s-icon"><i class="fa fa-floppy-o" aria-hidden="true"></i></td>
                    <td class="ft-d-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    <td class="ft-r-icon"><i class="fa fa-reply" aria-hidden="true"></i></td>
                    <td class="ft-set-icon"><i class="fa fa-cogs" aria-hidden="true"></i></td>
                </tr>
            </table>
        </div>
        <div class="ft2-footer">
            <table class="table">
                <tr>
                    <td class="ft-name">Name</td>
                    <td class="ft-pos">Pos</td>
                    <td class="ft-salary">Salary</td>
                    <td class="ft-opp">Opp</td>
                    <td class="ft-team">Team</td>
                    <td class="ft-fp">Fp</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
            </table>
        </div>
        <div class="ft-end-title">
            <h1>175.5</h1>
            <p>points</p>
        </div>
    </div>
</div>

<div class="item">
    <div class="st-hover">
        <div class="f-slider-title">
            <p>lorem ipsum dolram</p>
            <h1>42</h1>
        </div>
        <div class="ft-footer">
            <table class="table">
                <tr>
                    <td class="ft-title">lorem ipsum dolram</td>
                    <td class="ft-s-icon"><i class="fa fa-floppy-o" aria-hidden="true"></i></td>
                    <td class="ft-d-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                    <td class="ft-r-icon"><i class="fa fa-reply" aria-hidden="true"></i></td>
                    <td class="ft-set-icon"><i class="fa fa-cogs" aria-hidden="true"></i></td>
                </tr>
            </table>
        </div>
        <div class="ft2-footer">
            <table class="table">
                <tr>
                    <td class="ft-name">Name</td>
                    <td class="ft-pos">Pos</td>
                    <td class="ft-salary">Salary</td>
                    <td class="ft-opp">Opp</td>
                    <td class="ft-team">Team</td>
                    <td class="ft-fp">Fp</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
                <tr class="ft3-footer">
                    <td class="ft-name1">dummy</td>
                    <td class="ft-pos1">of</td>
                    <td class="ft-salary1">$550</td>
                    <td class="ft-opp1">lad</td>
                    <td class="ft-team1">@col</td>
                    <td class="ft-fp1">2.0</td>
                </tr>
            </table>
        </div>
        <div class="ft-end-title">
            <h1>175.5</h1>
            <p>points</p>
        </div>
    </div>
</div>



</div>
</div>
</div>
</div>
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
                    <p>3481 Melrose Place <br>
                        Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li> <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a> </li>
                        <li> <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a> </li>
                        <li> <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a> </li>
                        <li> <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a> </li>
                        <li> <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a> </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About LINEUP BEAST</h3>
                    <p>Aenean tempus pharetra consectetur. Vestibulum auctor erat in aliquam vulputate. <a href="http://startbootstrap.com">Vestibulum auctor</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> Copyright &copy; Your Website 2016 </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md"> <a class="btn btn-primary" href="#page-top"> <i class="fa fa-chevron-up"></i> </a> </div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"> </div>
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
                            <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a> </strong> </li>
                            <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a> </strong> </li>
                            <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a> </strong> </li>
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
                <div class="rl"> </div>
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
                            <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a> </strong> </li>
                            <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a> </strong> </li>
                            <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a> </strong> </li>
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
                <div class="rl"> </div>
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
                            <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a> </strong> </li>
                            <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a> </strong> </li>
                            <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a> </strong> </li>
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
                <div class="rl"> </div>
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
                            <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a> </strong> </li>
                            <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a> </strong> </li>
                            <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a> </strong> </li>
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
                <div class="rl"> </div>
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
                            <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a> </strong> </li>
                            <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a> </strong> </li>
                            <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a> </strong> </li>
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
                <div class="rl"> </div>
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
                            The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download
                            their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a> </strong> </li>
                            <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a> </strong> </li>
                            <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a> </strong> </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('loggedIn.scripts')
</body>
</html>
