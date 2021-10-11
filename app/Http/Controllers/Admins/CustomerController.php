<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('backend.customers.list', compact('customers'));

    }

    public function create()
    {
        return view('backend.customers.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $customers = new Customer();
        $customers->name = $request->input("name");
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $customers->image = $path;
        }
        $customers->email = $request->input('email');
        $customers->password = $request->input('password');
        $customers->address = $request->input('address');
        $customers->phone = $request->input('phone');
        $customers->date_of_birth	 = $request->input('date_of_birth');
        $customers->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('backend.customers.index');
    }

    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('backend.customers.edit', compact('customers'));
    }

    public function update(request $request, $id)
    {
        $customers = Customer::find($id);
        $customers->name = $request->input('name');
        if ($request->hasFile('image')) {
            $currentImg = $customers->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $customers->image = $path;
        }
        $customers->email = $request->input('email');
        $customers->password = $request->input('password');
        $customers->address = $request->input('address');
        $customers->phone = $request->input('phone');
        $customers->date_of_birth	 = $request->input('date_of_birth');
        $customers->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('backend.customer.index');
    }
    public function destroy($id){
        $customers = Customer::find($id);
        $image = $customers->image;

        //delete image

        if ($image) {
            Storage::delete('/public/' . $image);
        }

        $customers->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('backend.customers.index');
    }
}
