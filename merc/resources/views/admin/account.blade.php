@extends('admin.core.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Danh sách tài khoản
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Tài khoản</th>
                        <th>Ngày tạo</th>
                        <th>Quyền</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{$account->name}}</td>
                            <td>{{$account->email}}</td>
                            <td>{{$account->created_at}}</td>
                            <td>{{$account->role}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.edit.account', $account->id)}}">Chỉnh sửa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
