@extends('admin.core.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Danh sách đơn hàng
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Xe đăng ký mua</th>
                        <th>Tổng giá</th>
                        <th>Số lượng</th>
                        <th>Ngày đặt mua</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $key=>$order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->userEmail}}</td>
                            <td>{{$order->productName}}</td>
                            <td>{{number_format($order->totalPrice, 0, '.', ',') . '₫'}}</td>
                            <td>{{$order->quantityOrder}}</td>
                            <td>{{$order->orderDate}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
