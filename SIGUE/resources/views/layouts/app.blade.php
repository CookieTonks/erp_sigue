<!doctype html>
<html lang="en">

<head>
    <title>SIGUE | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Qubes Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../plantilla/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/animate-css/vivify.min.css">




    <!-- Tablas -->
    <link rel="stylesheet" href="../plantilla/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/sweetalert/sweetalert.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../plantilla/assets/css/site.min.css">

</head>

<body class="theme-blue">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><i class="fa fa-cube font-25"></i></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-left">
                    <div class="navbar-brand">
                        <a class="small_menu_btn" href="javascript:void(0);"><i class="fa fa-align-left"></i></a>
                        <a href="index.html"><span>SIGUE</span></a>
                    </div>
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <!-- Notificaciones -->
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-toggle icon-menu" data-toggle="modal" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fa fa-power-off"> Salir</i>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>



        <div id="left-sidebar" class="sidebar">
            <!-- <div class="sidebar_icon">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="page-search-results.html"><i class="fa fa-search"></i></a></li>
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Home-icon"><i class="fa fa-dashboard"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Envelope-icon"><i class="fa fa-envelope"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Components-icon"><i class="icon-diamond"></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Profile-icon"><i class="fa fa-user"></i></a>
                        <a class="nav-link" data-toggle="tab" href="#Setting-icon"><i class="fa fa-cog"></i></a>
                    </li>
                </ul>
            </div> -->
            <div class="sidebar_list">
                <div class="tab-content" id="main-menu">
                    <div class="tab-pane active" id="Home-icon">
                        <nav class="sidebar-nav sidebar-scroll">
                            <ul class="metismenu">
                                <li><a href="{{route('home')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                                <li class="header">Modulo Ordenes</li>
                                <li class=""><a href="{{route('dashboard_ordenes')}}"><i class="icon-paper-plane"></i><span>Ordenes</span></a></li>

                                <li><a href="{{route('buscador_ordenes')}}"><i class="icon-book-open"></i><span>Buscador</span></a></li>
                            </ul>
                            <ul class="metismenu">
                                <li class="header">Modulo Produccion</li>
                                <li class=""><a href="{{route('dashboard_produccion')}}"><i class="icon-paper-plane"></i><span>Programacion</span></a></li>
                                <li><a href="{{route('dashboard_tecnico')}}"><i class="icon-bubbles"></i><span>Tecnicos</span></a></li>
                                <li><a href="{{route('buscador_produccion')}}"><i class="icon-book-open"></i><span>Buscador</span></a></li>
                            </ul>
                            <ul class="metismenu">
                                <li class="header">Modulo Administrador</li>
                                <li><a href="{{route('dashboard_administrador')}}"><i class="icon-bubbles"></i><span>Administrador</span></a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

    </div>




    <!-- Javascript -->
    <!-- Latest jQuery -->
    <script src="../plantilla/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap 4x JS  -->
    <script src="../plantilla/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../plantilla/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../plantilla/assets/js/common.js"></script>
    <script src="../plantilla/assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Latest jQuery -->
    <script src="../plantilla/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap 4x JS  -->
    <script src="../plantilla/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../plantilla/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../plantilla/assets/bundles/datatablescripts.bundle.js"></script>

    <script src="../plantilla/assets/vendor/sweetalert/sweetalert.min.js"></script>
    <!-- SweetAlert Plugin Js -->
    <script src="../plantilla/assets/js/common.js"></script>
    <script src="../plantilla/assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</body>

</html>