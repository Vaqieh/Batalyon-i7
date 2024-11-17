<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Batalyon-i7</title>
  <link rel="shortcut icon" type="image/png" href="{{url ('Modernize-bootstrap-free-main/src/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ url('Modernize-bootstrap-free-main/src/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="{{('Modernize-bootstrap-free-main\src\assets\images\logos\dark-logo.svg')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Menu Utama</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('ferdinand') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Ferdinand Kurnia Laia</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('nayla') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Nayla Rinaldi</span>
              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <!-- Add User's Name in the Button if Logged In -->
                @auth
                    <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">
                        {{ Auth::user()->name }} 
                    </a>
                
                @endauth
        
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
        
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- Display user's profile picture -->
                            <img src="{{ asset('Modernize-bootstrap-free-main/src/assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-mail fs-6"></i>
                                    <p class="mb-0 fs-3">My Account</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-list-check fs-6"></i>
                                    <p class="mb-0 fs-3">My Task</p>
                                </a>
                               
                                    <a  href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                   
                            </div>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        
        
        </nav>
      </header>
      <!--  Header End -->
      <div>
        @yield('content')
      </div>
      
    </div>
  </div>
  <script src="{{url('Modernize-bootstrap-free-main/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('Modernize-bootstrap-free-main/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')  }}"></script>
  <script src="{{url('Modernize-bootstrap-free-main/src/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ url('Modernize-bootstrap-free-mai/srcn/assets/js/app.min.js') }}"></script>
  <script src="{{ url('Modernize-bootstrap-free-main/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>

  @yield('js')
</body>

</html>