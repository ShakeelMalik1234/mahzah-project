<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/mahzahdashboard.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-3 px-0 side-bar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline dashboard-img"><img src="{{ asset('images/dashboard-logo.png') }}" alt=""></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fa-sharp fa-solid fa-table-cells-large"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user-students') }}" class="nav-link px-0 align-middle">
                                <i class="far fa-user me-2"></i><span class="ms-1 d-none d-sm-inline">User</span> </a>
                        </li>
                        <li>
                            <a href="{{route('user-students') }}" class="nav-link px-0 align-middle">
                                <i class="far fa-list-alt me-1"></i><span class="ms-1 d-none d-sm-inline">Site</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" class="nav-link px-0 align-middle ">
                                <span class="ms-1 d-none d-sm-inline side-products text-white">PRODUCTS</span></a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-graduation-cap me-1"></i><span class="ms-1 d-none d-sm-inline">Courses</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-layer-group me-2"></i><span class="ms-1 d-none d-sm-inline">Bundles</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                            <i class="icone"><img src="images/consulting.png" class="consulting-img me-1" alt=""></i><span class="ms-1 d-none d-sm-inline">Coaching</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 mt-4 align-middle">
                            <i class="far fa-edit me-2"></i><span class="ms-1 d-none d-sm-inline">Price Plans</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="far fa-comment-alt me-2"></i><span class="ms-1 d-none d-sm-inline">Messages</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                            <i class="fa fa-gear me-2"></i><span class="ms-1 d-none d-sm-inline">Settings</span> </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col p-0">
                {{-- nav bar --}}
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid nav-width">
                        <div>
                            <a class="navbar-brand" href="#">DASHBOARD</a>
                        </div>
                        <div>
                            <div class="dropdown d-flex justify-content-end">
                                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="hugenerd" width="60" height="auto" class="rounded-circle profile-logo">
                                    <span class="d-none d-sm-inline mx-1">loser</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow text-center" >
                                    <li><a class="dropdown-item py-0" href="#"><img src="https://github.com/mdo.png" alt="hugenerd" width="70" height="auto" class="rounded-circle profile-logo"></a></li>
                                    <li><a class="dropdown-item py-0 fw-bold" href="#" style="font-size:18px;">Zain Shoukat</a></li>
                                    <li><a class="dropdown-item py-0" href="#">zain@email.com</a></li>
                                    <li><a class="dropdown-item manage-acc-btn" href="#">Manage Your Account</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item btn-sign-out" href="#">Sign out</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Privacy Policy - Terms of Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </nav>
                  {{--  --}}
                  
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/registration.js"></script>

  </body>
</html>