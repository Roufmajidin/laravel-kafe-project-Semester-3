
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Page &mdash;</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('style_adminPage/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style_adminPage/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('style_adminPage/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('style_adminPage/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/toast/toastr.min.css') }}">

<!-- Start GA -->

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('style/img/products/product-3-50.png') }}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('style/img/products/product-2-50.png') }}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('style/img/products/product-1-50.png') }}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>


        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>

            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">

                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('style/img/avatar/avatar-1.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>

                  <div class="dropdown-item-desc">
                    <b></b>
                    <p></p>
                    <div class="time">10 min Ago</div>
                  </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

            </div>
          </li>







          <li class="dropdown dropdown-list-toggle"><a href="/cek_out" class="nav-link notification nav-link-lg beep" data-toggle="tooltip" data-placement="top"
          title="">
          <i class="fa fa-shopping-cart"><p style="font-size:12px; top:6px; position:absolute;left:30px; color:#007bff;; background:#FFA426; border-radius:20px; width:12px; height:12px;"></p></i></a>


          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="fa fa-shopping-cart"></i></a>

            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('style/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <form class="" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              <button type="submit" class="dropdown-item has-icon text-danger" style="border:none;background:none">
                <i class="fas fa-sign-out-alt"></i> Logout
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#" style="color:white;">Penjualan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            @if (Auth::user()->level ==2)


            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>User Panel</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/penjualan">Belanja</a></li>
                <li><a class="nav-link" href="#">Cek Keranjangmu</a></li>
              </ul>
            </li>

            <li class="menu-header">Identitas Mu</li>



                <li><a class="nav-link" href="/identitas"><i class="fas fa-user"></i>Identitas</a></li>
                <li><a class="nav-link" href="/riwayat_cekout"><i class="fas fa-shopping-cart"></i>Riwayat Cek Out</a></li>
              </ul>
            </li>

            @elseif(Auth::user())
            <li class="menu-header" style="color:white;">Admin Panel</li>
            <li class="dropdown">
                <a href="/data-produk" style="color:white;" class="nav-link "><i class="fas fa-book"></i><span>Produk</span></a>
                <a href="/data-pesanan" style="color:white;" class="nav-link"><i class="fas fa-info"></i><span>History User</span></a>
                <a href="/data-user"  style="color:white;" class="nav-link"><i class="fas fa-user"></i><span>User Akun</span></a>

              </li>
              @endif




          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">

              <div class="breadcrumb-item"><a href="/data-produk">produk</a></div>
              <div class="breadcrumb-item"><a href="/data-pesanan">History User</a></div>
              <div class="breadcrumb-item"><a href="#">User</a></div>

            </div>
          </div>

            <!-- <h1>Page</h1> -->
            @yield('content')




        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('style_adminPage/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('style_adminPage/modules/popper.js') }}"></script>
  <script src="{{ asset('style_adminPage/modules/tooltip.js') }}"></script>
  <script src="{{ asset('style_adminPage/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('style_adminPage/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('style_adminPage/modules/moment.min.js') }}"></script>
  <script src="{{ asset('style_adminPage/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('style_adminPage/js/scripts.js') }}"></script>
  <script src="{{ asset('style_adminPage/js/custom.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
  <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        {{-- {!! Toastr::message() !!} --}}
</body>
</html>
