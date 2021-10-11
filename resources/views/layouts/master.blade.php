<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Sep 2018 02:16:14 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="master/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="master/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="master/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="master/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="master/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="master/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @extends('layouts.core.navbar');
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        @extends('layouts.core.right-sidebar');
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles primary"></div>
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default light"></div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.core.sidebar');
        <!-- partial -->
        @include('layouts.dashboard')
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="master/vendors/js/vendor.bundle.base.js"></script>
<script src="master/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="master/js/off-canvas.js"></script>
<script src="master/js/hoverable-collapse.js"></script>
<script src="master/js/misc.js"></script>
<script src="master/js/settings.js"></script>
<script src="master/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="master/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Sep 2018 02:16:55 GMT -->

</html>


