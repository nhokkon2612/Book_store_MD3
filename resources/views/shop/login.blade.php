
@extends('shop.master')
@section('content')

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Đăng nhập tài khoản</h2>
                    <form method="post" action="{{ route('shop.login') }}">
                        @csrf
                        <input type="email" placeholder="Email" name="email" />
                        <input type="password" placeholder="Mật khẩu" name="password" />
{{--                        <span>--}}
{{--								<input type="checkbox" class="checkbox">--}}
{{--								Keep me signed in--}}
{{--							</span>--}}
                        @if(Session::has('login-fail'))
                         <p class="btn btn-danger">{{ Session::get('login-fail') }}</p>
                    @endif
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Tài khoản mới!</h2>
                    <form method="post" action="{{ route('shop.register') }}">
                        @csrf
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Tên" class="form-control @error('name') is-invalid @enderror"/>
                        @error('name')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                        <input type="email" name="email" value=" {{old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror"/>
                        @error('email')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                        <input type="password" name="password" placeholder="Mật khẩu" class="form-control @error('password') is-invalid @enderror"/>
                        <input type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                        @error('password')
                        <p class="text-danger"> {{ $message }}</p>
                        @enderror
                        <input type="text" name="address" placeholder="Địa chỉ" />
                        <input type="text" name="phone" placeholder="Số điện thoại" />
                        <input type="date" name="dateOfBirth" placeholder="Ngày sinh" />
                        <button type="submit" class="btn btn-default">Đăng ký</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section>
@endsection

