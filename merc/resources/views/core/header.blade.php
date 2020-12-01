<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div style="margin-left: -120px" class="col-md-12">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="https://www.mercedes-benz.com.vn/vi/passengercars/_jcr_content/logo.noscale.cloudsvg.imageLogo.20180312094632.svg" alt=""/></a>
                    </div>
                    <div class="menu">
                        <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                        <ul class="nav" id="nav">
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li><a href="{{route('user.show')}}">Cửa hàng xe</a></li>
                            <li><a href="{{route('user.testDriveRegister')}}">Đăng ký lái thử</a></li>
                            <li><a href="{{route('login')}}">Đăng nhập</a></li>
                            <div class="clear"></div>
                        </ul>
                        <script type="text/javascript" src="{{asset('js/responsive-nav.js')}}"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <!-- start search-->

                    <!----search-scripts---->
                    <script src="{{asset('js/classie.js')}}"></script>
                    <script src="{{asset('js/uisearch.js')}}"></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    <!----//search-scripts---->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
