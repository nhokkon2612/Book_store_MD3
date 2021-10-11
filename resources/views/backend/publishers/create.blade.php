
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
                                        <option>Bách khoa Hà Nội</option>
                                        <option>Chính trị Quốc gia Sự thật</option>
                                        <option>Công an nhân dân</option>
                                        <option>Công Thương</option>
                                        <option>Dân trí</option>
                                        <option>Giao thông vận tải</option>
                                        <option>Giáo dục Việt Nam</option>
                                        <option>Hàng hải</option>
                                        <option>Học viện Nông nghiệp</option>
                                        <option>Hồng Đức</option>
                                        <option>Hội Nhà văn</option>
                                        <option>Khoa học Tự nhiên và Công nghệ</option>
                                        <option>Khoa học và Kỹ thuật</option>
                                        <option>Khoa học xã hội</option>
                                        <option>Kim Đồng</option>
                                        <option>Kinh tế thành phố Hồ Chí Minh</option>
                                        <option>Lao động</option>
                                        <option>Lao động - Xã hội</option>
                                        <option>Lý luận Chính trị</option>
                                        <option>Mỹ thuật</option>
                                        <option>Nông nghiệp</option>
                                        <option>Phụ nữ</option>
                                        <option>Quân đội nhân dân</option>
                                        <option>Sân khấu</option>
                                        <option>Thanh niên</option>
                                        <option>Thông tin và Truyền thông</option>
                                        <option>Thông tấn</option>
                                        <option>Thế giới</option>
                                        <option>Thể thao và Du lịch</option>
                                        <option>Thống kê</option>
                                        <option>Tri thức</option>
                                        <option>Tài chính</option>
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


