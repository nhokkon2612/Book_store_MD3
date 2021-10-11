@extends('shop.master')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="">
                <ol class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <form action="{{route('shop.updateCart')}}" method="POST">
                        @csrf
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Sách</td>
                            <td class="description"></td>
                            <td class="price">Giá</td>
                            <td class="quantity">Số lương mua</td>
                            <td class="total">Thành tiền</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($booksInCart as $key=>$book)
                            <tr>
                                <td class="cart_product">
                                    <img src="{{asset('storage/'.$book['image'])}}" alt="">
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""></a>{{$book['name']}}</h4>
                                    <p>{{$book['publisher']}}</p>
                                </td>
                                <td class="cart_price">
                                    <p>{{number_format($book['price'])}} VNĐ</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href=""> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity[{{$key}}][]"
                                               value="{{$book['quantity']}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p id="product_price.{{$key}}" value="{{($book['price']*$book['quantity'])}}"
                                       class="cart_total_price">{{number_format($book['price']*$book['quantity'])}}
                                        VNĐ</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @empty
                            <p>Giỏ hàng của bạn đang trống! Hãy lựa chọn cuốn sách cho tâm hồn của mình </p>
                        @endforelse
                        </tbody>
                        <tr bgcolor="#ffe4c4">
                            <td colspan="1" font-size="300">
                                <button class="btn btn-warning" type="submit"><i class="fas fa-sort-amount-up-alt">Cập nhật</i></button>
                            </td>
                            <td colspan="3"><a href="{{route('shop.checkout')}}" type="button" class="btn btn-success">Thanh toán</a></td>
                            <td colspan="2">
                                <h3>Tổng: {{number_format(session('allTotal'))}} VNĐ</h3>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your
                    delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>$59</span></li>
                            <li>Eco Tax <span>$2</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>$61</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
@endsection
