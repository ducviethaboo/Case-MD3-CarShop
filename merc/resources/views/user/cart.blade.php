@extends('core.master')
@section('content')
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Chi tiết đơn hàng</h3>
                    <p class="mb-5 text-center">
                        <i class="text-info font-weight-bold">3</i> items in your cart</p>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th style="width:60%">Sản phẩm</th>
                            <th style="width:12%">Giá</th>
                            <th style="width:10%">Số lượng</th>
                            <th style="width:16%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
{{--                                        <img src='{{asset("$cart->productArray[$int][$img]")}}' alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">--}}
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4>{{$cart->productArray[0]['productName']}}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"></td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control form-control-lg text-center" value="1">
                            </td>
                            <td class="actions" data-th="">
                                <div class="text-right">
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fas fa-sync"></i>
                                    </button>
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="float-right text-right">
                        <h4>Tổng tiền:</h4>
                        <h1>$99.00</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Thanh toán</a>
                </div>
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="catalog.html">
                        <i class="fas fa-arrow-left mr-2"></i> Tiếp tục xem </a>
                </div>
            </div>
        </div>
    </section>
@endsection
