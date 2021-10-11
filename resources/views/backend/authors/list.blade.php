@extends('backend.layout.master')

@section('content')
    <style>
        #d-flex justify-content-center{
            position: relative;
            float: right;
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
                        <h2>Bảng <b>Danh sách tác giả</b></h2>
                    </div>
                    <div class="table-responsive">
                        <h3 class="card-title">
                            <a class="btn btn-primary" href="{{ route('admin.authors.create') }}">Thêm mới</a>
                        </h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Tiểu sử tác giả</th>
                                <th>Tình trạng hiện tại</th>
                                <th>Nghề nghiệp</th>
                                <th>Ngày sinh</th>
                                <th>Ngày mất</th>
                                <th colspan="2">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $key => $author)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        <img  class="mr-2" alt="image" style="width:50px; height:50px" src="{{asset('/storage/'.$author->image)}}">
                                        {{$author->name}}
                                    </td>
                                    <td>
                                        {{$author->career}}
                                    </td>
                                    <td>
                                        {{$author->live_die_unknow}}
                                    </td>
                                    <td>
                                        {{$author->school}}
                                    </td>
                                    <td>
                                        {{$author->date_of_birth}}
                                    </td>
                                    <td>
                                        {{$author->date_of_die}}
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('admin.authors.edit', $author->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ route('admin.authors.destroy', $author->id) }}" onclick="return confirm('Không thể xóa')"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style=" position: relative;float: right;" class="d-flex justify-content-center">
                            {!! $authors->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


