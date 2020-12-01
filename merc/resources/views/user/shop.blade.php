@extends('core.master')
@section('content')
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="row shop_box-top" >
                    @foreach($products as $product)
                    <div class="col-md-3 shop_box mb-3"><a href="single.html">
                            <img style="width: 100%" src="{{$product->productImg}}" class="img-responsive" alt=""/>
                            <div class="shop_desc">
                                <h3><a href="#">{{$product->productName}}</a></h3>
                                <span class="actual">{{$product->productPrice}}</span><br>
                                <ul class="buttons">
                                    <li class="shop_btn"><a href="{{route('user.showByid', $product->id)}}">Chi tiết</a></li>
                                    <div class="clear"> </div>
                                </ul>
                            </div>
                        </a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
