@extends('core.master')
@section('content')

    {{--    <h2 class="text-center m-4">{{ "Chi tiết giỏ hàng" }}</h2>--}}
    {{--    @if (session()->has('success'))--}}
    {{--        <div class="col-12 alert alert-success alert-block">--}}
    {{--            <button type="button" class="close" data-dismiss="alert">×</button>--}}
    {{--            <strong>{{ session()->get('success') }}</strong>--}}
    {{--        </div>--}}

    {{--    @endif--}}
    {{--    @if (session()->has('delete_error'))--}}
    {{--        <div class="col-12 alert alert-danger alert-block">--}}
    {{--            <button type="button" class="close" data-dismiss="alert">×</button>--}}
    {{--            <strong>{{ session()->get('delete_error') }}</strong>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    {{--    <div class="col-12 col-md-12 mt-2 border">--}}
    {{--        <table id="cart" class="table table-hover table-bordered mt-4">--}}
    {{--            <thead>--}}
    {{--            <tr>--}}
    {{--                <th style="width:50%">Product</th>--}}
    {{--                <th style="width:10%">Price</th>--}}
    {{--                <th style="width:8%">Quantity</th>--}}
    {{--                <th style="width:22%" class="text-center">Subtotal</th>--}}
    {{--                <th style="width:10%"></th>--}}
    {{--            </tr>--}}
    {{--            </thead>--}}
    {{--            <tbody>--}}
    {{--            @if(session()->has('cart') && $cart->totalQty > 0)--}}
    {{--                @foreach($cart->items as $product)--}}
    {{--                    <tr>--}}
    {{--                        <td data-th="Product">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-2 hidden-xs"><img--}}
    {{--                                        src="{{ asset('images/' . $product['item']->productImg) }}"--}}
    {{--                                        alt="..."--}}
    {{--                                        class="img-responsive" width="100%"/></div>--}}
    {{--                                <div class="col-md-10">--}}
    {{--                                    <h4 class="nomargin">{{ $product['item']->productName }}</h4>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}
    {{--                        <td data-th="Price">--}}
    {{--                        {{ '$' . $product['item']->price }}--}}
    {{--                        </td>--}}
    {{--                        <td data-th="Quantity">--}}
    {{--                            <input type="number" data-id="{{ $product['item']->id }}" class="form-control text-center update-product-cart" min="0" name="qty"--}}
    {{--                                   value="{{ $product['qty'] }}">--}}
    {{--                        </td>--}}
    {{--                        <td data-th="Subtotal" id="product-subtotal-{{$product['item']->id}}" class="text-center">{{ '$' . $product['price']  }}</td>--}}
    {{--                        <td class="actions" data-th="">--}}
    {{--                            <a class="btn btn-danger btn-sm"--}}
    {{--                               href="{{ route('cart.removeProductIntoCart', $product['item']->id) }}"><i--}}
    {{--                                    class="fa fa-trash-o"></i></a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                @endforeach--}}
    {{--            </tbody>--}}
    {{--            <tfoot>--}}
    {{--            <tr>--}}
    {{--                <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>--}}
    {{--                </td>--}}
    {{--                <td colspan="2" class="hidden-xs"></td>--}}
    {{--                <td id="total-price-cart" class="hidden-xs text-center"><strong>Tổng tiền: ${{ $cart->totalPrice }}</strong></td>--}}
    {{--                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>--}}
    {{--            </tr>--}}
    {{--            </tfoot>--}}
    {{--            @else--}}
    {{--                <tr>--}}
    {{--                    <td colspan="5" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>--}}
    {{--                </tr>--}}
    {{--            @endif--}}
    {{--        </table>--}}

    {{--    </div>--}}
    <!--Section: Block Content-->
    <!--Section: Block Content-->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <div>
        @if (session()->has('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('success') }}</strong>
            </div>
        @endif
        @if (session()->has('delete_error'))--}}
        <div class="col-12 alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session()->get('delete_error') }}</strong>
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Thành tiền</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(session()->has('cart') && $cart->totalQty > 0)
                            @foreach($cart->items as $product)
                                <tr>
                                    <td class="col-md-6">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading"><a
                                                        href="#">Merc {{ $product['item']->productName }}</a></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               value="{{$product['qty']}}">
                                    </td>
                                    <td class="col-md-1 text-center">
                                        <strong>{{ number_format($product['item']->productPrice, 0, '.', ',') }}</strong>
                                    </td>
                                    <td class="col-md-1 text-center">
                                        <strong>{{ number_format($product['price'], 0, '.', ',') }}</strong></td>
                                    <td class="col-md-1">
                                        <a class="btn btn-danger btn-sm"
                                           href="{{ route('cart.removeProductIntoCart', $product['item']->id) }}"><i
                                                class="fa fa-trash-o"></i>Xoá khỏi giỏ hàng</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>  </td>
                                    <td>
                                        <a class="btn btn-success"
                                           href="{{ url('/') }}">Tiếp tục mua hàng</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success">
                                            Checkout
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <td colspan="5" class="text-center">
                                <p>{{ "Bạn chưa mua sản phẩm nào" }}@endif
                                    <tr>
                                        <td>  </td>
                                        <td>  </td>
                                        <td>  </td>
                                        <td><h3>Thành tiền:</h3></td>
                                        <td class="text-right"><h3>
                                                <strong> {{number_format($cart->totalPrice,0,'.',',')}}</strong>
                                            </h3></td>
                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection
