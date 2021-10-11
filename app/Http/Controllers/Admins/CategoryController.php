<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('backend.categories.list', compact('categories'));

    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $categories = new Category();
        $categories->name = $request->input("name");
        $categories->description = $request->input('description');
        $categories->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('backend.categories.index');
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.categories.edit', compact('categories'));
    }

    public function update(request $request, $id)
    {
        $categories = Category::find($id);
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('backend.categories.index');
    }
    public function destroy($id){
        $categories = Category::find($id);
        $categories->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('backend.categories.index');
    }
}
