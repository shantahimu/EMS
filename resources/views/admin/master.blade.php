<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Event Vibes </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ url('/backend') }}/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @notifyCss
    <style>
      .notify{
        z-index: 1000000;
        position: absolute;
        top: 8%;
      }
    </style>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
@include('notify::components.notify')

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ url('/') }}">Event Vibes</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <div class="rowlist-inline-item">
            <a href="#!" style="text-decoration: none;" class="row text-muted" data-bs-toggle="modal"
                data-bs-target="#userModal">
                <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="col-md-10 p-0">
                    {{ auth()->guard('admin')->user()->name }}
                </div>
            </a>
        </div>

        </ul>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion bg-light" id="sidenavAccordion">
                @include('admin.partial.sidebar')

        </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <ol class="breadcrumb mb-4">
                </ol>
                <div class="row">


                </div>
            </div>
            @yield('content')
    </div>
    </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ url('/backend') }}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('/backend') }}/assets/demo/chart-area-demo.js"></script>
    <script src="{{ url('/backend') }}/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ url('/backend') }}/js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @notifyJs



    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container modal-content p-5">
                <div class="container">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="text-center rounded-5">
                            <img style="border-radius: 10%; margin-left: 110px" height="150" width="150"
                                src="{{ url('uploads/' .auth()->guard('admin')->user()->image) }}" alt="">
                            <div class="mt-2">
                                <input type="file" style="display: none;" id="profilePicture" name="file" />
                            </div>
                        </div>
                    </div>

                    <div class="modal-header border-primary">
                        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">
                            {{ auth()->guard('admin')->user()->name }}</h5>
                    </div>

                </div>

                <div class="modal-body">

                    <div class="row g-3">
                        <!-- col -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">Role</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{ auth()->guard('admin')->user()->role }}</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-2">Email</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{ auth()->guard('admin')->user()->email }}</div>
                            </div>
                        </div>

                        <div class="col-12 pb-2">
                            <div class="row">
                                <div class="col-2">Number</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{ auth()->guard('admin')->user()->phone }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-warning mb-3">
                    <a class="nav-link" href="{{ route('admin.logout') }}">
                        Log out
                    </a>
                </button>
                <a href="{{ route('profile.view') }}"><i class="bi bi-people-fill"></i></a>
            </div>
        </div>
    </div>

    <script src="https://getbootstrap.com/docs/5.2/examples/dashboard/dashboard.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @stack('yourJsCode')
</body>


</html>
