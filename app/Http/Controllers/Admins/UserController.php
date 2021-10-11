<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('User.list', compact('users'));

    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $users = new User();
        $users->name = $request->input("name");
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $users->image = $path;
        }
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->phone = $request->input('phone');
        $users->address = $request->input('address');
        $users->date_of_birth = $request->input('date_of_birth');
        $users->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    public function update(request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        if ($request->hasFile('image')) {
            $currentImg = $users->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $users->image = $path;
        }
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->phone = $request->input('phone');
        $users->address = $request->input('address');
        $users->date_of_birth = $request->input('date_of_birth');
        $users->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('users.index');
    }
    public function destroy($id){
        $users = User::find($id);
        $image = $users->image;

        //delete image

        if ($image) {
            Storage::delete('/public/' . $image);
        }

        $users->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('users.index');
    }
}
