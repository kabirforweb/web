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

        var action = "{{session()->get('action')}}";

        if(action == 'forgot_password'){
            $('#loginbox').hide();
            $('#signupbox').hide();
            $('#forgot_password').show();
        }else{
            $('#loginbox').show()
            $('#signupbox').hide();
            $('#forgot_password').hide();
        }
    });
</script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
