@extends('core.master')
@section('content')
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <form method="post" action="{{route('user.registerPost')}}">
                    @csrf
                    <div class="register-top-grid">
                        <h2>Thông tin khách hàng</h2>
                        <br>
                        <div>
                            <span>Họ và tên:<label>*</label></span>
                            <input name="name" type="text">
                        </div>
                        <div>
                            <span>Số điện thoại:<label>*</label></span>
                            <input name="phone" type="text">
                        </div>
                        <div>
                            <span>Email<label>*</label></span>
                            <input name="email" type="text">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="register-bottom-grid">
                        @if ($errors->any())
                            @foreach($errors->all() as $nameError)
                                <p style="color:red">{{ $nameError }}</p>
                            @endforeach
                        @endif
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <input style="font-size: 18px" class="btn-primary btn" type="submit" value="Xác nhận">
                    <a class="btn" href="{{route('home')}}">Quay lại trang chủ</a>
                </form>
            </div>
        </div>
    </div>

@endsection
