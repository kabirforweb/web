@extends('guest.master')
@include('guest.head')

<body id="page-top" class="index">

<!-- About Section -->
<section class="login-sec" id="">

    <div class="container">
        <div id="forgot_password" style=" margin-top:0px"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <div class="text-center logo-top-img">
                <a href="{{route('home')}}"><img src="{{asset('images/logo-trans.png')}}" width="90" height="90"></a></div>

            <div class="panel panel-info login-bg" >
                <div class="panel-heading">
                    <div class="panel-title">Forgot password</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="{{route('login')}}" onclick="$('#loginbox').show(); $('#signupbox').hide(); $('#forgot_password').hide()">Sign In?</a></div>
                </div>

                @if(Session::has('flash_notification.message'))
                <div class="alert alert-{{ Session::get('flash_notification.level') }} text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_notification.message') }}
                </div>
                @endif

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="reset_password" class="form-horizontal" role="form" action="{{route('reset_password')}}" method="post">

                        {{csrf_field()}}

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="password" class="form-control" name="password" value="" placeholder="Enter your new password" required="required">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="password" class="form-control" name="confirm_password" value="" placeholder="Confirm password" required="required">
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-9">
                                <button id="btn-signup" type="submit" class="btn btn-color btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

</section>
@include('guest.footer')
@include('guest.styles')

@section('scripts')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection