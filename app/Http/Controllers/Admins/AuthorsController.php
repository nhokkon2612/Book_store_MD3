<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors=Author::all();
        return view('backend.authors.list',compact('authors'));
    }
    public function create()
    {
        return view('backend.authors.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $authors = new Author();
        $authors->name = $request->input("name");
        $authors->date_of_birth = $request->input('date_of_birth');
        $authors->date_of_die = $request->input('date_of_die');
        $authors->live_die_unknow = $request->input('live_die_unknow');
        $authors->career = $request->input('career');
        $authors->school = $request->input('school');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $authors->image = $path;
        }
        $authors->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('backend.authors.index');
    }

    public function edit($id)
    {
        $authors = Author::find($id);
        return view('backend.authors.edit', compact('authors'));
    }

    public function update(request $request, $id)
    {
        $authors = Author::find($id);

        $authors->name = $request->input("name");
        $authors->date_of_birth = $request->input('date_of_birth');
        $authors->date_of_die = $request->input('date_of_die');
        $authors->live_die_unknow = $request->input('live_die_unknow');
        $authors->career = $request->input('career');
        $authors->school = $request->input('school');
        if ($request->hasFile('image')) {
            $currentImg = $authors->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $authors->image = $path;
        }
        $authors->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('backend.authors.index');
    }
    public function destroy($id){
        $authors = Author::find($id);
        $image = $authors->image;

        //delete image

        if ($image) {
            Storage::delete('/public/' . $image);
        }

        $authors->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('backend.authors.index');
    }
}
