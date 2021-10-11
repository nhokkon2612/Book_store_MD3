<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
//        $books = Book::all();
        $books = Book::with('categories','author','publisher')->get();

        dd($books);

        return view('backend.books.list', compact('books'));

    }

    public function create()
    {
        return view('backend.books.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $book = new Book();
        $book->name = $request->input("name");
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $book->image = $path;
        }
        $book->description = $request->input('description');
        $book->cost = $request->input('cost');
        $book->price = $request->input('price');
        $book->quantity_import = $request->input('quantity_import');
        $book->quantity_now = $request->input('quantity_now');
        $book->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('backend.books.index');
    }

    public function edit($id)
    {
        $books = Book::find($id);
        return view('backend.books.edit', compact('books'));
    }

    public function update(request $request, $id)
    {
        $book = Book::find($id);
        $book->name = $request->input('name');
        if ($request->hasFile('image')) {
            $currentImg = $book->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $book->image = $path;
        }
        $book->description = $request->input('description');
        $book->cost = $request->input('cost');
        $book->price = $request->input('price');
        $book->quantity_import = $request->input('quantity_import');
        $book->quantity_now = $request->input('quantity_now');
        $book->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('backend.books.index');
    }
    public function destroy($id){
        $book= Book::find($id);
        $image = $book->image;

        //delete image

        if ($image) {
            Storage::delete('/public/' . $image);
        }

        $book->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('backend.books.index');
    }
}
