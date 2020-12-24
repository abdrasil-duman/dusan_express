<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link href="/admin/dist/css/colorbox.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{route('profile.index')}}" class="d-block">{{Auth::user()->name}}</a>
                    <a href="{{route('index')}}" class="d-block">Admin panel</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                 Blog
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('blog.create')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Create Post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>All posts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-align-left"></i>
                            <p>
                                Categories
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('category.create')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Create Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>All categories</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Brand
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('brand.create')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Create Brand</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('brand.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>All Brands</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('product.create')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Create Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('product.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>All products</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Tag
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('tag.create')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Create Tag</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tag.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>All Tags</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Type
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('type.create')}}" class="nav-link ">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Create type</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('type.index')}}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>All types</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
</body>
</html>
