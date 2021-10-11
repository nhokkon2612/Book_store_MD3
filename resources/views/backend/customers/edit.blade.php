@extends('backend.layout.master')

@section('content')
    <div class="col-12"><h1>Cập nhật sách</h1></div>
    <div class="col-12">
        <form method="POST" action="{{ route('admin.customers.update',$customer->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên khách hàng</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Ảnh</label>
                <div class="col-sm-9">
                    <input type="file" name="image" class="form-control-file" >
                </div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control"  value="{{ $customer->email }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="address" value="{{ $customer->address }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Ngày sinh</label>
                <div class="col-sm-9">
                    <input class="form-control" type="date" name="date_of_birth" value="{{ $customer->date_of_birth }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <div class="col-sm-9">
                    <input class="form-control" type="number" name="phone" value="{{ $customer->phone }}" required>
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

