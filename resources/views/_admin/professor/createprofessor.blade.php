<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Create Professor | Admin dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href "/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href "/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href "/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href "/admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href "/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href "/admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href "/admin/plugins/summernote/summernote-bs4.css">
    <script src "/admin/plugins/jquery/jquery.min.js"></script>
    <script src "/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/admin/home" class="brand-link">
                <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Dashboard</span>
            </a>

            <div class="sidebar">

                @include('admin_sidebar')

            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card" style="width: 100%;">

                            <form action="{{ route('admin.professor.add') }}" method="post">
                                @csrf
                                <div class="card-header">
                                    Create Professor
                                </div>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="card-body" style="height: 80% !important;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_name">Professor Name</label>
                                                <input type="text" class="form-control" name="professor_name" id="professor_name" aria-describedby="helpId" placeholder="Enter Professor Name">
                                                <small id="helpId" class="form-text text-muted">Please enter professor name</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_university">Professor University</label>
                                                <input type="text" class="form-control" name="professor_university" id="professor_university" aria-describedby="helpId" placeholder="Enter Professor University">
                                                <small id="helpId" class="form-text text-muted">Please enter Professor University</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_email">Professor Email</label>
                                                <input type="email" class="form-control" name="professor_email" id="professor_email" aria-describedby="helpId" placeholder="Enter Professor Email">
                                                <small id="helpId" class="form-text text-muted">Please enter professor email</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_phone">Professor Contact Number</label>
                                                <input type="text" class="form-control" name="professor_phone" id="professor_phone" aria-describedby="helpId" placeholder="Enter Professor Contact Number">
                                                <small id="helpId" class="form-text text-muted">Please enter professor phone number</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_researchinterest">Professor Research Interest</label>
                                                <input type="text" class="form-control" name="professor_researchinterest" id="professor_researchinterest" aria-describedby="helpId" placeholder="Enter Professor Research Interest">
                                                <small id="helpId" class="form-text text-muted">Please enter Professor Research Interest</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_disciplines">Professor Discipline</label>
                                                <input type="text" class="form-control" name="professor_disciplines" id="professor_disciplines" aria-describedby="helpId" placeholder="Enter Professor Discipline">
                                                <small id="helpId" class="form-text text-muted">Please enter professor discipline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="professor_subdisciplines">Professor Sub Discipline</label>
                                                <input type="text" class="form-control" name="professor_subdisciplines" id="professor_subdisciplines" aria-describedby="helpId" placeholder="Enter Professor sub-discipline">
                                                <small id="helpId" class="form-text text-muted">Please enter subdiscipline</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">

                                        <button type="" class="btn btn-danger">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
            </section>
            </div>

        </div>

        <script src '/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
        <script src "/admin/plugins/chart.js/Chart.min.js"></script>
        <script src "/admin/plugins/sparklines/sparkline.js"></script>
        <script src "/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src "/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src "/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src "/admin/plugins/moment/moment.min.js"></script>
        <script src "/admin/plugins/daterangepicker/daterangepicker.js"></script>
        <script src "/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src "/admin/plugins/summernote/summernote-bs4.min.js"></script>
        <script src "/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="/admin/dist/js/adminlte.js"></script>
        <script src="/admin/dist/js/pages/dashboard.js"></script>
        <script src="/admin/dist/js/demo.js"></script>
</body>

</html>