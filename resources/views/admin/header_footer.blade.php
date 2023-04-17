<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Insurance</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/adminindex" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <span class="brand-text font-weight-light">AdminLTE 3</span>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar /user panel (optional) -->
                <div class="/user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dist/img/AdminLTELogo.png" height="50px" width="50px" class="img-circle elevation-2" alt="/user Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/adminindex" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/insurancecategory" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Insurance Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/addcategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/viewcategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/insurancesubcategory" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Insurance Subcategory
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/addsubcategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Subcategory</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/viewsubcategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Subcategory</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/insurancepolicy" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Insurance Policy
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/addpolicy" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Policy</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/viewpolicy" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Policy</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/viewuser" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    View User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    About
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/addabout" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add About</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/viewabout" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View About</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item">
                            <a href="/policyholders" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Policy Holders
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/viewpolicyholders" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view Policy Holders</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/viewtickets" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    View Tickets
                                </p>
                            </a>
                        <li class="nav-item">
                            <a href="/viewprofile" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    View Profile
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        @yield('admin-body')




        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard.js"></script>
</body>

</html>