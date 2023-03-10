<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >
    <title>Admin</title>
    <!-- plugins:css -->
    <link
        rel="stylesheet"
        href="{{ asset('vendors/feather/feather.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendors/typicons/typicons.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendors/css/vendor.bundle.base.css') }}"
    >
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
        rel="stylesheet"
        href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('jss/select.dataTables.min.css') }}"
    >
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link
        rel="stylesheet"
        href="{{ asset('csss/vertical-layout-light/style.css') }}"
    >
    <!-- endinject -->
    <link
        rel="shortcut icon"
        href="{{ asset('images/favicon.png') }}"
    />

    <style>
        .form-control, .form-select{
            height: 2.8rem;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button
                        class="navbar-toggler navbar-toggler align-self-center"
                        type="button"
                        data-bs-toggle="minimize"
                    >
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a
                        class="navbar-brand brand-logo"
                        href="admin.html"
                    >
                        {{-- <img
                            src="{{ asset('images/logo.svg') }}"
                            alt="logo"
                        /> --}}
                        BABY-DAWN
                    </a>
                    <a
                        class="navbar-brand brand-logo-mini"
                        href="admin.html"
                    >
                        <img
                            src="{{ asset('assets/images/logo.png') }}"
                            alt="logo"
                        />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a
                            class="nav-link"
                            id="UserDropdown"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                                class="img-xs rounded-circle"
                                src="{{ asset('assets/images/logo.png') }}"
                                alt="Profile image"
                            > </a>
                        <div
                            class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="UserDropdown"
                        >
                            <div class="dropdown-header text-center">
                                <img
                                    class="img-md rounded-circle"
                                    src="{{ asset('assets/images/logo.png') }}"
                                    alt="Profile image"
                                >
                                <p class="mb-1 mt-3 font-weight-semibold">Admin</p>
                            </div>

                            <a class="dropdown-item" href="#" onclick="logout()">
                                <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button
                    class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                    type="button"
                    data-bs-toggle="offcanvas"
                >
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div
                    id="theme-settings"
                    class="settings-panel"
                >
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div
                        class="sidebar-bg-options selected"
                        id="sidebar-light-theme"
                    >
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div
                        class="sidebar-bg-options"
                        id="sidebar-dark-theme"
                    >
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial:partials/_sidebar.html -->
            <nav
                class="sidebar sidebar-offcanvas"
                id="sidebar"
            >
                <ul class="nav">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{route('admin.index')}}"
                        >
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route('admin.records.index') }}"
                        >
                            <i class="mdi mdi-account-circle-outline menu-icon"></i>
                            <span class="menu-title">Birth Records</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route('admin.hospitals.index') }}"
                        >
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Hospitals</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{route('admin.doctors.index')}}"
                        >
                            <i class="menu-icon mdi mdi-account-plus"></i>
                            <span class="menu-title">Doctors</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="#"
                            onclick="logout()"
                        >
                            <i class="menu-icon mdi mdi-power"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>



                </ul>
            </nav>

            <div class="w-100">
                <div class="my-4 ps-3">
                    <h3>@yield('title')</h3>
                </div>

                @if (session()->has('error'))
                    <div class="mx-5 py-3">
                        <div class="alert alert-danger">
                            {{ session()->pull('error') }}
                        </div>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="mx-5 p-3">
                        <div class="alert alert-success">
                            {{ session()->pull('success') }}
                        </div>
                    </div>
                @endif

                @yield('content')

            </div>

            <form action="{{route('logout')}}" method="post" id="logout-form">
                @csrf
            </form>

            <!-- partial -->
            {{-- <div class="main-panel"> --}}

            <!-- partial:partials/_footer.html -->
            {{-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright ?? 2021. All rights reserved.</span>
          </div>
        </footer> --}}
            <!-- partial -->
            {{-- </div> --}}
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/progressbar.js/progressbar.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('jss/off-canvas.js') }}"></script>
    <script src="{{ asset('jss/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('jss/template.js') }}"></script>
    <script src="{{ asset('jss/settings.js') }}"></script>
    <script src="{{ asset('jss/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('jss/dashboard.js') }}"></script>
    <script src="{{ asset('jss/Chart.roundedBarCharts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <!-- End custom js for this page-->

    <script>
        const logout = () => {
            Swal.fire({
                // title: 'Are you sure?',
                text: "You will be logged out of your account.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
            }).then(result =>{
                if(result.isConfirmed){
                    document.getElementById('logout-form').submit();
                }
            })
        }
    </script>
</body>

</html>
