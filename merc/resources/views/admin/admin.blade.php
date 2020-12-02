@extends('admin.core.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Danh sách xe trong kho
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên</th>
                        <th>Loại</th>
                        <th>Màu</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>BH - {{$product->id}}</td>
                            <td>{{$product->productName}}</td>
                            <td>{{$product->productType}}</td>
                            <td>{{$product->productColor}}</td>
                            <td>{{number_format($product->productPrice, 0, ',', '.')}}</td>
                            <td style="width: 20%"><img style="width: 50%" src='{{asset("$product->productImg")}}'></td>
                            <td>
                               <a class="btn btn-success"
                                   href="{{route('admin.showById', ['id' => $product->id])}}">Sửa</a> |
                                <a onclick="confirm('Are you sure?!')" class="btn btn-danger"
                                   href="{{route('admin.delete',['id' => $product->id])}}">Xoá</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
