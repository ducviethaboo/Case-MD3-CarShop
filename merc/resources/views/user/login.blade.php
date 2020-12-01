<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Đăng nhập</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function () {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function () {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function () {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>
<body>
@include('core.header')
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="col-md-6">

                <div class="login-title">
                    <h4 class="title">Đăng nhập</h4>
                    <div id="loginbox" class="loginbox">
                        <form action="{{route('login.check')}}" method="post" name="login" id="login-form">
                            @csrf
                            <fieldset class="input">
                                <p id="login-form-username">
                                    <label for="modlgn_username">Email</label>
                                    <input id="modlgn_username" type="text" name="email" class="inputbox" size="18"
                                           autocomplete="off">
                                </p>
                                <p id="login-form-password">
                                    <label for="modlgn_passwd">Mật khẩu</label>
                                    <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18"
                                           autocomplete="off">
                                </p>
                                @if (session()->has('login-fail'))
                                    <p style="color: red">{{session()->get('login-fail')}}</p>
                                @endif
                                <div class="remember">
                                    <p id="login-form-remember">
                                        <label for="modlgn_remember"><a class="btn" href="{{route('user.register')}}">Chưa có tài khoản ?!</a></label>
                                    </p>
                                    <input type="submit" name="Submit" class="button" value="Đăng nhập">
                                    <div class="clear"></div>
                                    <a class="btn" href="{{route('home')}}">Quay lại trang chủ</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
@include('core.footer')
</body>
</html>
