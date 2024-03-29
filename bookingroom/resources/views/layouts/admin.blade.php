<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ __('Employee Attendance App') }}</title>
        <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin="">
        </script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <img class="img-logo order-1 order-sm-0 order-md-0" src="{{ asset('assets') }}/assets/img/1ga-logo.png"/>
            <button class="btn btn-icon btn-transparent-dark ml-3 ml-lg-0 mr-lg-2" id="sidebarToggle" href="#">
                <i data-feather="menu"></i>
            </button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">     
                            <div class="sidenav-menu-heading">{{ __('Employee') }}</div>
                            <a class="nav-link" href="{{ route('hotel') }}">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                {{ __('List Hotel') }}
                            </a>
                            <a class="nav-link" href="adminreport">
                                <div class="nav-link-icon"><i data-feather="bar-chart-2"></i></div>
                                {{ __('Attendance Report') }}
                            </a>
                            <div class="sidenav-menu-heading">{{ __('Master Data') }}</div>
                            <a class="nav-link" href="workinghours">
                                <div class="nav-link-icon"><i data-feather="clock"></i></div>
                                {{ __('Working Hours') }}
                            </a>
                            <a class="nav-link" href="officeprofile">
                                <div class="nav-link-icon"><i data-feather="home"></i></div>
                                {{ __('Office') }}
                            </a>
                            <div class="sidenav-menu-heading">{{ __('Profile') }}</div>
                            <a class="nav-link" href="adminprofile">
                                <div class="nav-link-icon"><i data-feather="user"></i></div>
                                {{ __('Profile') }}
                            </a>
                            <div class="sidenav-menu-heading">{{ __('Logout') }}</div>
                            <a class="nav-link" href="onclick="confirm_modal() data-toggle="modal" data-target="#modalLogout">
                                <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </div>
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">{{ __('Logged in as:') }}</div>
                            <div class="sidenav-footer-title">Raka}</div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('admin_content')
                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-md-right small">
                                Copyright &copy; Group 3 | Attendance App
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure want to logout?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" type="button" href="">Yes</a>
                    </div>
                </div>
            </div>
        </div>
        @stack('before-script')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/assets/demo/chart-area-demo.js"></script>
        <script src="{{ asset('assets') }}/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/assets/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets') }}/assets/demo/date-range-picker-demo.js"></script>
        @stack('after-script')
    </body>
</html>