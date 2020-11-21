@extends('core.master')
@section('content')
    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="row shop_box-top">
                    @foreach($products as $product)
                    <div class="col-md-3 shop_box"><a href="single.html">
                            <img src="images/pic5.jpg" class="img-responsive" alt=""/>
                            <div class="shop_desc">
                                <h3><a href="#">{{$product->productName}}</a></h3>
                                <p>Lorem ipsum consectetuer adipiscing </p>
                                <span class="actual">{{$product->productPrice}}</span><br>
                                <ul class="buttons">
                                    <li class="cart"><a href="#">Add To Cart</a></li>
                                    <li class="shop_btn"><a href="#">Read More</a></li>
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
