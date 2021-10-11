@extends('backend.layout.master')
@section('content')
    <style>
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #F44336;
        }
        th{
            background-color: #bc6af3;
        }
    </style>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-6">
                        <h2>Bảng <b>Danh sách khách hàng</b></h2>
                    </div>
                    <h3 class="card-title">
                        <a class="btn btn-primary" href="{{ route('admin.customers.create') }}">Thêm mới</a>
                    </h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    STT
                                </th>
                                <th>
                                    Tên khách hàng
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Địa chỉ
                                </th>
                                <th>
                                    SĐT
                                </th>
                                <th>
                                    Ngày sinh
                                </th>
                                <th colspan="2">
                                    Lựa chọn
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach ($customers as $key => $customer)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        <img  class="mr-2" alt="image" style="width:50px; height:50px" src="{{asset('/storage/'.$customer->image)}}">
                                        {{$customer->name}}
                                    </td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->date_of_birth}}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('admin.customers.edit', $customer->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ route('admin.customers.destroy', $customer->id) }}" onclick="return confirm('bạn có muốn xóa {{$customer->name}} không?')"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        <div style=" position: relative;float: right;" class="d-flex justify-content-center">
                            {!! $customers->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
