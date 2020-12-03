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
            <div style="margin-left: -120px" class="col-md-11">
                <div class="header-left">
                    <div class="logo ">
                        <a href="{{route('home')}}"><img
                                src="https://www.mercedes-benz.com.vn/vi/passengercars/_jcr_content/logo.noscale.cloudsvg.imageLogo.20180312094632.svg"
                                alt=""/></a>
                    </div>
                    <div class="menu">
                        <ul class="nav" id="nav">
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li><a href="{{route('user.show')}}">Cửa hàng xe</a></li>
                            <li><a href="{{route('user.testDriveRegister')}}">Đăng ký lái thử</a></li>
                        </ul>
                        <div class="header-left" style="text-align: right; position: absolute">
                        </div>
                        <script type="text/javascript" src="{{asset('js/responsive-nav.js')}}"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form method="post" action="{{route('user.search')}}">
                                @csrf
                                <input class="sb-search-input" placeholder="Nhập thứ bạn muốn tìm kiếm..." type="search"
                                       name="search" id="search">
                                <input class="sb-search-submit" type="submit">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <script src="{{asset('js/classie.js')}}"></script>
                    <script src="{{asset('js/uisearch.js')}}"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                </div>
            </div>
            <div style="margin-top: 17px">
                @if(session()->has('login'))
                    <p style="color: white; font-size: 12px">Đăng nhập bởi: <a href="{{route('user.account.detail')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a> </p>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button style="font-size: 12px" class="btn btn-link" type="submit">Đăng xuất</button>
                    </form>
                @endif
                    <a style="color: white" href="{{route('login')}}"><svg width="30px" height="25px" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
