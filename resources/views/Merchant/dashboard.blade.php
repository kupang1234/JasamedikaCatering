<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT JASAMEDIKA TRANSMEDIC</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- Required Framework -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
      <!-- am chart export.css -->
      <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
      {{-- font Awesome --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="{{ asset('assets/images/logo.png" alt="Theme-Logo')}}" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          
                      </ul>
                      <ul class="nav-right">
                          
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  {{-- <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> --}}
                                  <span>Hallo,  {{ $user->nama_perusahaan }}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#profileModal"><i class="ti-user"></i> Profile</button>
                                  </li>
                                  <li class="waves-effect waves-light">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-left"></i> Logout</button>
                                        </form>
                                          {{-- <i class="ti-layout-sidebar-left"></i> Logout --}}
                                      
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="profileModalLabel">Edit Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="nama_perusahaan">Nama Perusahaan:</label>
                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan', $user->nama_perusahaan) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Nomor Telepon:</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $user->telepon) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $user->deskripsi) }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">PENGELOLAAN</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="/merchant/dashboard" class="waves-effect waves-dark ">
                                    <span class="pcoded-micon"><i class="fa-solid fa-house"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                              <li>
                                  <a href="{{ route('menu.index') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-bowl-food"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Menu</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-brands fa-first-order"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Daftar Order</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>
                      </div>
                  </nav>


                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Dashboard</h5>
                                          <p class="m-b-0">Selamat Datang di PT JASAMEDIKA TRANSMEDIC</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div><br>
                      @if (session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  @endif
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple">$30200</h4>
                                                                <h6 class="text-muted m-b-0">Total Menu</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">290+</h4>
                                                                <h6 class="text-muted m-b-0">Total Order</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-file-text-o f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red">145</h4>
                                                                <h6 class="text-muted m-b-0">Orderan Selesai</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-calendar-check-o f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-red">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="fa fa-line-chart text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                            <!-- task, page, download counter  end -->
    
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Popper.js -->
    <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Excanvas -->
    <script type="text/javascript" src="{{ asset('assets/pages/widget/excanvas.js') }}"></script>
    <!-- Waves JS -->
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jQuery SlimScroll -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- Modernizr JS -->
    <script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }}"></script>
    <!-- SmoothScroll JS -->
    <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <!-- jQuery mCustomScrollbar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Chart.js -->
    <script type="text/javascript" src="{{ asset('assets/js/chart.js/Chart.js') }}"></script>
    <!-- AmCharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('assets/pages/widget/amchart/gauge.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/pie.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- Menu JS -->
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-layout.min.js') }}"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
