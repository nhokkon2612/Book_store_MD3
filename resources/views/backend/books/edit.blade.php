@extends('backend.layout.master')

@section('content')
    <div class="col-12"><h1>Cập nhật sách</h1></div>
    <div class="col-12">
        <form method="POST" action="{{ route('admin.books.update',$book->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên sách</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="{{ $book->name }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <div class="col-sm-9">
                    <input type="file" name="image" class="form-control-file" >
                </div>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <div class="col-sm-9">
                    <input type="text" name="description" class="form-control"  value="{{ $book->description }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Giá nhập</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="cost" value="{{ $book->cost }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Giá bán</label>
                <div class="col-sm-9">
                    <input class="form-control" type="number" name="price" value="{{ $book->price  }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Số lượng nhập</label>
                <div class="col-sm-9">
                    <input class="form-control" type="number" name="quantity_import" value="{{ $book->quantity_import }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Số lượng còn</label>
                <div class="col-sm-9">
                    <input class="form-control" type="number" name="quantity_now" value="{{ $book->quantity_now }}" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
@endsection
