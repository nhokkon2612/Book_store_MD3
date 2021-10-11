@extends('backend.layout.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table">
                        <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Purchased On</th>
                            <th>Customer</th>
                            <th>Ship to</th>
                            <th>Base Price</th>
                            <th>Purchased Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>2012/08/03</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                                <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2015/04/01</td>
                            <td>Doe</td>
                            <td>Brazil</td>
                            <td>$4500</td>
                            <td>$7500</td>
                            <td>
                                <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2010/11/21</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                                <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2016/01/12</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                                <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2017/12/28</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                                <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>2000/10/30</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                                <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>2011/03/11</td>
                            <td>Cris</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                                <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>2015/06/25</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                                <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>2016/11/12</td>
                            <td>John</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                                <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>2003/12/26</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                                <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
=======

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

