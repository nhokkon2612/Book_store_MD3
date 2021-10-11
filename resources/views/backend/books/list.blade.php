@extends('backend.layout.master')

@section('content')
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
                    <h4 class="card-title">Top khách hàng tiềm năng</h4>
                    <div class="table-responsive">
                        <h3 class="card-title">
                            <a class="btn btn-primary" href="{{ route('admin.books.create') }}">Thêm mới</a>
                        </h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Nội dung sách</th>
                                <th>Giá nhập</th>
                                <th>Giá bán</th>
                                <th>Số lượng nhập</th>
                                <th>Số lượng còn</th>
                                <th colspan="2" style="">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $key => $book)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        <img  class="mr-2" alt="image" style="width:50px; height:50px" src="{{asset('/storage/'.$book->image)}}">
                                        {{$book->name}}
                                    </td>
                                    <td>
                                        {{$book->description}}
                                    </td>
                                    <td>
                                        {{$book->cost}}
                                    </td>
                                    <td>
                                        {{$book->price}}
                                    </td>
                                    <td>
                                        {{$book->quantity_import}}
                                    </td>
                                    <td>
                                        {{$book->quantity_now}}
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('admin.books.edit', $book->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ route('admin.books.destroy', $book->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                    {{--                                    <td>--}}
                                    {{--                                        <button class="btn btn-outline-success"><a href="{{route('admin.books.create')}} >Sửa</a>--}}
                                    {{--                                        </button>--}}
                                    {{--                                        <button class="btn btn-outline-danger">Xóa</button>--}}
                                    {{--                                    </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div style=" position: relative;float: right;" class="d-flex justify-content-center">
                            {!! $books->links() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

