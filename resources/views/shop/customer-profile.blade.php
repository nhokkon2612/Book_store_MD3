@extends('shop.master')
@section('content')
<style>

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>
    <div class="row">
        <form method="post" enctype="multipart/form-data" action=" {{ route('shop.edit-customer-profile',$customer->id) }}">
            @csrf
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <h2>Ảnh đại diện</h2>
                <div class="col">
                @if($customer->image == null)
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                @else
                    <img class="rounded-circle mt-5" width="200px" height="150px" src="{{ asset('/storage/'.$customer->image) }}">
                    @endif
                </div>
                <div class="col-sm-5">
                    <p><input type="file" class="form-control-file" name="image" required></p>
                </div>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Chỉnh sửa thông tin người dùng</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Tên</label><input type="text" name="name" class="form-control"  value="{{ $customer->name }}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input disabled class="form-control" placeholder="enter phone number" value=" {{ $customer->email }}"></div>
                    <div class="col-md-12"><label class="labels">Mật khẩu</label><input disabled type="password" class="form-control" placeholder="enter address line 1" value="123456789"></div>
                    <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" name="address" class="form-control" placeholder="enter address line 2" value="{{ $customer->address }}"></div>
                    <div class="col-md-12"><label class="labels">Điện thoại</label><input type="text" name="phone" class="form-control" placeholder="enter address line 2" value=" {{$customer->phone}}"></div>
                    <div class="col-md-12"><label class="labels">Sinh nhật</label><input type="date" name="dateOfBirth" class="form-control" placeholder="enter address line 2" value="{{ $customer->date_of_birth }}"></div>
                <div class="mt-6 text-center">
                    <button class="btn btn-primary profile-button" type="submit">Lưu</button>
                    <p>---</p>
                    <button class=" btn back"><a href="{{ route('shop.comeback') }}">Hủy</a></button>
                    <button class="btn btn-light" onclick="window.history.go(-1); return false;">Cancel</button>
                </div>
            </div>

        </div>
    </div>
        </form>
</div>
@endsection
