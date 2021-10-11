@extends('backend.layout.master')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới sách</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên sách</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="image" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung sách</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="description" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá nhập</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cost" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá bán</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng nhập</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="quantity_import" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng còn lại</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="quantity_now" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID tác giả</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="author_id" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID nhà xuất bản</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="publisher_id" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <button class="btn btn-light" onclick="window.history.go(-1); return false;">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
