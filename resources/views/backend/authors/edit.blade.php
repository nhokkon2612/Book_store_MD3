@extends('backend.layout.master')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới tác giả</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.authors.update',$author->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên tác giả</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{ $author->name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiểu sử tác giả</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="career" value="{{ $author->career }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tình trạng</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="live_die_unknow" required>
                                        <option>Còn sống</option>
                                        <option>Đã chết</option>
                                        <option>Chưa xác định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Năm sinh</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" name="date_of_birth" value="{{ $author->date_of_birth }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Năm mất</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="date" name="date_of_die" value="{{ $author->data_of_die}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nơi làm việc</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="school" value="{{ $author->school }}" required>
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

