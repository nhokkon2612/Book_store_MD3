<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCustomerRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class ShopController extends Controller
{
    public function showHome()
    {
        $books = Book::with('categories','publisher','author')->get();
        return view('shop.home',compact('books'));
    }

    public function showFormLogin()
    {
        return view('shop.login');
    }

    public function login(Request $request)
    {
         $customers = Customer::all();
         $email = $request->email;
         $password = $request->password;
         $flag = false;
         foreach($customers as $key => $customer){
             if($email == $customer->email && $password == $customer->password){
                 $flag = true;
                 $request->session()->push('customer-info',$customer);
             }
         }
         if($flag){
             alert()->success('Đăng nhập thành công','Chào mừng bạn đến với BookStore');
             return redirect()->route('shop.home');
         } else {
             $message = "Tài khoản mật khẩu của bạn không chính xác vui lòng đăng nhập lại";
             $request->session()->flash('login-fail',$message);
             return redirect()->back();
         }
    }

    public function logout()
    {
        Session::forget('customer-info');
        return redirect()->route('shop.home');
    }

    public function register(RegisterCustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password= $request->password;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->date_of_birth= $request->dateOfBirth;
        $customer->save();
        return redirect()->back();
    }


}
