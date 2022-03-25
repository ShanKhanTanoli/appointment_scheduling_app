<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('dashboard/img/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ Setting::Logo() }}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('dashboard/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('dashboard/css/material-dashboard.css?v=3.0.1') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body class="">

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('main') }}">
                            {{ Setting::Logo() }}
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        @if (Request::path() != 'login')
                            <div class="collapse navbar-collapse" id="navigation">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link me-2" href="{{ route('AdminDashboard') }}">
                                            <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                            Sign In
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <!--Begin::Section-->
    @yield('content')
    <!--Begin::Section-->

    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/core/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @livewireScripts
    <script>
        $(document).ready(function() {
            Livewire.on('site', site => {

                $('#MakeAppointment').modal('show');

            });
        });
        //MakeAppointment
    </script>
</body>

</html>
