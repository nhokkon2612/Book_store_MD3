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
                        <h2>Bảng <b>thể loại sách</b></h2>
                    </div>
                    <h3 class="card-title">
                        <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Thêm mới</a>
                    </h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    STT
                                </th>
                                <th>
                                    Tên thể loại
                                </th>
                                <th>
                                    Mô tả
                                </th>
                                <th colspan="2">
                                    Lựa chọn
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>

                                    <td>
                                        <a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Không thể xóa')"><i class="fa fa-trash"></i></button>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        <div style=" position: relative;float: right;" class="d-flex justify-content-center">
                            {!! $categories->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
