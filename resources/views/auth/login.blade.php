<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('auth.login_title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {!! Html::style('css/preview.css') !!}
    {!! Html::script('js/modernizr.js') !!}
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>

<body class="eternity-form">

    <section class="colorBg1 colorBg">
        <div class="container">

            <div class="login-form-section">
                <div class="login-content" data-animation="bounceIn">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="section-title">
                            <h3>Login to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="email" required="required" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                <input type="password" required="required" class="form-control" name="password" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="login-form-action clearfix">
                            <div class="checkbox pull-left">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="remember iCheck" checked>
                                </div>
                                <span class="checkbox-text pull-left">&nbsp;Remember Me</span>
                            </div>
                            <button type="submit" class="btn btn-success pull-right green-btn">Login &nbsp; <i
                                        class="icon-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="login-form-links link1 " data-animation="fadeInLeftBig" data-animation-delay=".2s">
                    <h4 class="blue">Don't have an Account?</h4>
                    <span>No worry</span>
                    <a href="#demo2" class="blue">Click Here</a>
                    <span>to Register</span>
                </div>
                <div class="login-form-links link2 " data-animation="fadeInRightBig" data-animation-delay=".4s">
                    <h4 class="green">Forget your Password?</h4>
                    <span>Dont worry</span>
                    <a href="#demo3" class="green">Click Here</a>
                    <span>to Get New One</span>
                </div>
            </div>

        </div>
    </section>

{!! Html::script('js/jquery-1.9.1.js') !!}
{!! Html::script('js/bootstrap.js') !!}
{!! Html::script('js/jquery.icheck.js') !!}
{!! Html::script('js/waypoints.min.js') !!}

<script type="text/javascript">
    $(function () {
        $("input").iCheck({
            checkboxClass: 'icheckbox_square-blue',
            increaseArea: '20%' // optional
        });
        $(".dark input").iCheck({
            checkboxClass: 'icheckbox_polaris',
            increaseArea: '20%' // optional
        });
        $(".form-control").focus(function () {
            $(this).closest(".textbox-wrap").addClass("focused");
        }).blur(function () {
            $(this).closest(".textbox-wrap").removeClass("focused");
        });

        //On Scroll Animations


        if ($(window).width() >= 968 && !Modernizr.touch && Modernizr.cssanimations) {

            $("body").addClass("scroll-animations-activated");
            $('[data-animation-delay]').each(function () {
                var animationDelay = $(this).data("animation-delay");
                $(this).css({
                    "-webkit-animation-delay": animationDelay,
                    "-moz-animation-delay": animationDelay,
                    "-o-animation-delay": animationDelay,
                    "-ms-animation-delay": animationDelay,
                    "animation-delay": animationDelay
                });

            });
            $('[data-animation]').waypoint(function (direction) {
                if (direction == "down") {
                    $(this).addClass("animated " + $(this).data("animation"));

                }
            }, {
                offset: '90%'
            }).waypoint(function (direction) {
                if (direction == "up") {
                    $(this).removeClass("animated " + $(this).data("animation"));

                }
            }, {
                offset: $(window).height() + 1
            });
        }

        //End On Scroll Animations

    });
</script>

</body>
