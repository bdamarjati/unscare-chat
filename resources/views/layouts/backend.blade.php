<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="{{asset('CostumStyle/images/favicon-32x32.png')}}" type="image/png" />
        <!--plugins-->
        <link href="{{asset('CostumStyle/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
        <link href="{{asset('CostumStyle/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
        <link href="{{asset('CostumStyle/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
        <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
        <!-- loader-->
        <link href="{{asset('CostumStyle/css/pace.min.css')}}" rel="stylesheet" />
        <script src="{{asset('CostumStyle/js/pace.min.js')}}"></script>
        <!-- Bootstrap CSS -->
        <link href="{{asset('CostumStyle/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('CostumStyle/css/app.css')}}" rel="stylesheet">
        <link href="{{asset('CostumStyle/css/icons.css')}}" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="{{asset('CostumStyle/css/dark-theme.css')}}" />
        <link rel="stylesheet" href="{{asset('CostumStyle/css/semi-dark.css')}}" />
        <link rel="stylesheet" href="{{asset('CostumStyle/css/header-colors.css')}}" />
        <!-- Additional CSS -->
        <link rel="stylesheet" href="{{asset('CostumStyle/style.css')}}">
        <!-- Page Title -->
        <title>UNS CARE</title>
    </head>

    <!-- Bagian Body Semua Berawal Dari Sini -->
    <body>
        <!--wrapper-->
        <div class="wrapper">

            <!--sidebar wrapper (Bagian SideBar)-->
            <div class="sidebar-wrapper" data-simplebar="true">
                <!-- Sidebar Header -->
                <div class="sidebar-header">
                    <div>
                        <img src="{{asset('CostumStyle/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                    </div>
                    <div>
                        <br>
                            <h4 class="logo-text">UNS CARE</h4>
                        <br>
                    </div>
                    <div class="toggle-icon ms-auto"><i class='bx bx-chevron-left-circle font-35'></i>
                    </div>
                </div>

                <!--Navigation-->
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class='bx bx-home-circle'></i>
                            </div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                        <ul>
                            <li> <a href="{{url('/home')}}"><i class="bx bx-right-arrow-alt"></i>Profile</a>
                            </li>
                        </ul>
                    </li>

                    @if((Auth::user()->role ?? '') == 'user')
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class='bx bxs-virus'></i>
                            </div>
                            <div class="menu-title">Covid 19</div>
                        </a>
                        <ul>
                            <li> <a href="{{url('/user/claimcovid')}}"><i class="bx bx-right-arrow-alt"></i>Claim Covid</a>
                            </li>
                            <li> <a href="{{url('/user/claimvaksin')}}"><i class="bx bx-right-arrow-alt"></i>Claim Vaksin</a>
                            </li>
                            <li> <a href="{{url('/user/gejalacovid')}}"><i class="bx bx-right-arrow-alt"></i>Gejala Covid</a>
                            </li>
                            <li> <a href="{{url('/user/isolasimandiri')}}"><i class="bx bx-right-arrow-alt"></i>Isolasi Mandiri</a>
                            </li>
                            <li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>History Pribadi</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if((Auth::user()->role ?? '') == 'admin')
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class='bx bx-notepad' ></i>
                            </div>
                            <div class="menu-title">Data User Administration</div>
                        </a>
                        <ul>
                            <li> <a href="{{url('/admin/useradministration')}}"><i class="bx bx-right-arrow-alt"></i>List User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class='bx bx-list-ul' ></i>
                            </div>
                            <div class="menu-title">Data Covid 19</div>
                        </a>
                        <ul>
                            <li> <a href="{{url('/admin/datapositifcovid')}}"><i class="bx bx-right-arrow-alt"></i>Data User Positif Covid</a>
                            </li>
                            <li> <a href="{{url('/admin/datavaksin')}}"><i class="bx bx-right-arrow-alt"></i>Data Vaksinasi</a>
                            </li>
                            <li> <a href="{{url('/admin/datagejala')}}"><i class="bx bx-right-arrow-alt"></i>Data User Bergejala Covid</a>
                            </li>
                            <li> <a href="{{url('/admin/dataisolasi')}}"><i class="bx bx-right-arrow-alt"></i>Data User Isolasi Mandiri</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if(($complete->status ?? '') == 'dokter' && ($complete->verified ?? '') == 'yes')
                    <li>
                        <a href="javascript:;" class="has-arrow">
                            <div class="parent-icon"><i class='bx bx-list-ul' ></i>
                            </div>
                            <div class="menu-title">Data Covid 19</div>
                        </a>
                        <ul>
                            <li> <a href="{{url('/admin/datapositifcovid')}}"><i class="bx bx-right-arrow-alt"></i>Data User Positif Covid</a>
                            </li>
                            <li> <a href="{{url('/admin/datavaksin')}}"><i class="bx bx-right-arrow-alt"></i>Data Vaksinasi</a>
                            </li>
                            <li> <a href="{{url('/admin/datagejala')}}"><i class="bx bx-right-arrow-alt"></i>Data User Bergejala Covid</a>
                            </li>
                            <li> <a href="{{url('/admin/dataisolasi')}}"><i class="bx bx-right-arrow-alt"></i>Data User Isolasi Mandiri</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="/{{ config('chatify.routes.prefix') }}" class="has-arrow">
                            <div class="parent-icon"><i class='bx bx-chat' ></i>
                            </div>
                            <div class="menu-title">Fitur Chat</div>
                        </a>
                    </li>
                </ul>
                <!--end navigation-->

            </div>
            <!--end sidebar wrapper -->

            <!--start header (Bagian Atas (Topbar)) -->
            <header>
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item mobile-search-icon">
                                    <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                        </a>
                                        <div class="header-notifications-list">
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                        </a>
                                        <div class="header-message-list">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-box dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bxs-user-circle text-dark font-50"></i>
                                <div class="user-info ps-3">
                                    <p class="user-name mb-0">@yield('data')</p>
                                    <p class="designattion mb-0">@yield('status')</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
                                </li>
                                <li>
                                    <div class="dropdown-divider mb-0"></div>
                                </li>
                                <li><a class="dropdown-item" href="{{url('logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--end header -->

            <!--start page wrapper (Bagian Isi Utama)-->
            <div class="page-wrapper">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
            <!--end page wrapper -->

            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">
            <p class="mb-0">Copyright © 2021 <a href="">. Dr. Paradise</a></p>
            </footer>
        </div>
        <!--end wrapper-->

        <!--start switcher-->
        <div class="switcher-wrapper">
            <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
            </div>
            <div class="switcher-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                    <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
                </div>
                <hr/>
                    <h6 class="mb-0">Theme Styles</h6>
                <hr/>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                        <label class="form-check-label" for="lightmode">Light</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                        <label class="form-check-label" for="darkmode">Dark</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                        <label class="form-check-label" for="semidark">Semi Dark</label>
                    </div>
                </div>
                <hr/>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                    <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
                </div>
                <hr/>
                    <h6 class="mb-0">Header Colors</h6>
                <hr/>
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
                <hr/>
                    <h6 class="mb-0">Sidebar Backgrounds</h6>
                <hr/>
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end switcher-->

        <!-- Additional Css -->
        <script src="{{asset('CostumStyle/script.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('CostumStyle/js/bootstrap.bundle.min.js')}}"></script>
        <!--plugins-->
        <script src="{{asset('CostumStyle/js/jquery.min.js')}}"></script>
        <script src="{{asset('CostumStyle/plugins/simplebar/js/simplebar.min.js')}}"></script>
        <script src="{{asset('CostumStyle/plugins/metismenu/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('CostumStyle/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('CostumStyle/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('CostumStyle/js/table-datatable.js')}}"></script>
        <!--app JS-->
        <script src="{{asset('CostumStyle/js/app.js')}}"></script>
    </body>

</html>