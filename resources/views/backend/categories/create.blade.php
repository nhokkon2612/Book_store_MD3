@extends('backend.layout.master')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới thể loại</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Thể loại</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="name" required>
                                        <option>Sách Chính trị – pháp luật</option>
                                        <option>Sách Khoa học công nghệ – Kinh tế</option>
                                        <option>Sách Văn học nghệ thuật</option>
                                        <option>Sách Văn hóa xã hội – Lịch sử</option>
                                        <option>Sách Giáo trình</option>
                                        <option>Sách Truyện, tiểu thuyết</option>
                                        <option>Sách Tâm lý, tâm linh, tôn giáo</option>
                                        <option>Sách Sách thiếu nhi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-file" name="description" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <button class="btn btn-light" onclick="window.history.go(-1); return false;">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

