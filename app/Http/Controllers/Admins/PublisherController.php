<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::paginate();

        return view('backend.publishers.list', compact('publishers'));

    }

    public function create()
    {
        return view('backend.publishers.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $publishers = new Publisher();
        $publishers->name = $request->input("name");
        $publishers->description = $request->input('description');
        $publishers->phone1 = $request->input('phone1');
        $publishers->phone2 = $request->input('phone2');
        $publishers->address1= $request->input('address1');
        $publishers->address2 = $request->input('address2');
        $publishers->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('publishers.index');
    }

    public function edit($id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publishers.edit', compact('publisher'));
    }

    public function update(request $request, $id)
    {
        $publishers = Publisher::find($id);
        $publishers->name = $request->input("name");
        $publishers->description = $request->input('description');
        $publishers->phone1 = $request->input('phone1');
        $publishers->phone2 = $request->input('phone2');
        $publishers->address1= $request->input('address1');
        $publishers->address2 = $request->input('address2');
        $publishers->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('admin.publisher.index');
    }
    public function destroy($id){
        $publishers = Publisher::find($id);
        $publishers->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('admin.publishers.index');
    }
}
