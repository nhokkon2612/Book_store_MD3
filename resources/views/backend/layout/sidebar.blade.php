<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">

                    <img src="{{asset('master/images/faces/face1.jpg')}}" alt="profile">

                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Thịnh_Ngọc_Cường</span>
                    <span class="text-secondary text-small">Quản lí dự án</span>

                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">

            <a class="nav-link" href="{{route('admin.layout.dashboard')}}">

                <span class="menu-title">Trang chủ</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
               aria-controls="page-layouts">
                <span class="menu-title"><Layouts>Quản lí khách hàng</Layouts></span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-apps menu-icon"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.customers.index')}}">Danh sách khách
                            hàng</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.customers.create')}}">Thêm</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
               aria-controls="sidebar-layouts">

                <span class="menu-title">Quản lí sản phẩm</span>

                <i class="menu-arrow"></i>
                <i class="mdi mdi-playlist-play menu-icon"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.books.index')}}">Danh sách sản
                            phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.books.create')}}">Thêm</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                <span class="menu-title">Tác giả</span>

                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.authors.index')}}">Danh sách tác
                            giả</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.authors.create')}}">Thêm</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
               aria-controls="ui-advanced">

                <span class="menu-title">Thể loại sách</span>

                <i class="menu-arrow"></i>
                <i class="mdi mdi-cards-variant menu-icon"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.categories.index')}}">Danh sách thể
                            loại</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.categories.create')}}">Thêm</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
               aria-controls="ui-advanced">
                <span class="menu-title">Advanced UI</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cards-variant menu-icon"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Dragula</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Clipboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Context menu</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Colcade</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Loaders</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Tooltip</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
               aria-controls="ui-advanced">
                <span class="menu-title">Advanced UI</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cards-variant menu-icon"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Dragula</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Clipboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Context menu</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="">Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Colcade</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Loaders</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Tooltip</a></li>
>>>>>>> 4db5697f00b5695a50612e3c61642c4921fa6a5e
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <span class="menu-title">Popups</span>
            </a>
            <a class="nav-link" href="{{route('admin.publishers.index')}}">
                <span class="menu-title">Nhà xuất bản</span>
                <i class="mdi mdi-forum menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
