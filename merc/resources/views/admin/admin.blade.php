@extends('admin.core.master')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Trang chinh</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách kho
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên</th>
                            <th>Loại</th>
                            <th>Màu</th>
                            <th>Giá</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>BH - {{$product->id}}</td>
                                <td>{{$product->productName}}</td>
                                <td>{{$product->productType}}</td>
                                <td>{{$product->productColor}}</td>
                                <td>{{$product->productPrice}}</td>
                                <td><a href="{{route('admin.delete',['id' => $product->id])}}">Xoá</a> |
                                    <a href="{{route('admin.showById', ['id' => $product->id])}}">Sửa</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
