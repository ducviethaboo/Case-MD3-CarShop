@extends('admin.core.master')
@section('content')
    <div class="container">
        <h1>Sửa thông tin sản phẩm</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                    <br>
                    <br>
                    <h6>Thay đổi ảnh khác</h6>
                    <input style="border: 0px" type="file" class="form-control">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">

                <h3>Thông tin sản phẩm</h3>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tên sản phẩm:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="productName" type="text" value="{{$product->productName}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Loại xe:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productType" value="{{$product->productType}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Màu sắc:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productType" value="{{$product->productColor}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Giá sản phẩm:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="productPrice" value="{{$product->productPrice}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="button" class="btn btn-primary" value="Lưu thay đổi">
                            <span></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection
