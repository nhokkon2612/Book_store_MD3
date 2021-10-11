<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCustomerRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ShopController extends Controller
{
    public function showHome()
    {
        $books = Book::with('categories', 'publisher', 'author')->get();
        return view('shop.home', compact('books'));
    }

    public function showFormLogin()
    {
        return view('shop.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $customer = Customer::where('email', '=', "$email")->first();

        if ($customer == null) {
            $message = "Tài khoản mật khẩu của bạn không chính xác vui lòng đăng nhập lại";
            $request->session()->flash('login-fail', $message);
            return redirect()->back();
        } else {
            $check = Hash::check($password, $customer->password);
            if ($check == true) {
                Session::put('customer-info', $customer);
                if (!session('customer-info')) {
                    return redirect()->back();
                } else {
                    alert()->success('Đăng nhập thành công', 'Chào mừng bạn đến với BookStore');
                    return redirect()->route('shop.home');
                }
            }
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
        $customer->password = $request->password;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->date_of_birth = $request->dateOfBirth;
        $customer->save();
        return redirect()->back();
    }

    public function showCustomerProfile($id)
    {
        $customer = Customer::findOrFail($id);
        return view('shop.customer-profile',compact('customer'));
    }

    public function comeBack()
    {
        return redirect()->route('shop.home');
    }

    public function editProfile(Request $request,$id)
    {
        $customer = Customer::findOrFail($id);
        if ($request->hasFile('image')) {
            $currentImg = $customer->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $customer->image = $path;
        }
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->date_of_birth = $request->dateOfBirth;
        $customer->save();
        return redirect()->back();
    }


}
