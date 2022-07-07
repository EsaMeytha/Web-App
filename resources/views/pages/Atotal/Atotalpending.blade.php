<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>ADMIN | APPROVAL WEBSITE</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset ('assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset ('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{ asset ('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset ('assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <!-- CSS Table -->
  <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/style.css') }}">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset ('assets/img/brand/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('admin.home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">View All</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.create') }}">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Apply Approved</span>
              </a>
            </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <!-- Avatar -->
                        <!-- Avatar -->
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">

              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/ava.png') }}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-0">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{ route('pages.Atotal.Atotalapproved') }}">Approved</a></h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_approved }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{ route('pages.Atotal.Atotalrejected') }}">Rejected</a></h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_rejected }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                 <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{ route('pages.Atotal.Atotalpending') }}"><b>Pending</b></a></h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_pending }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><a href="#">All</a></h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_reserve }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- Page content -->
     <div class="container-fluid mt--4">
    <div class="order">
      <div class="row">
      <div class="card">
      <div class="card-body">
        <h4 class="box-title">Pending</h4>
      <div class="card-body">
      <div class="table-container">
          <table class="table1">
                <thead>
                  <tr>
                    <th><span class="h4 font-weight-bold mb-0">#</span></th>
                    <th><span class="h4 font-weight-bold mb-0">Name</span></th>
                    <th><span class="h4 font-weight-bold mb-0">Email</span></th>
                    <th><span class="h4 font-weight-bold mb-0">Department</span></th>
                    <th><span class="h4 font-weight-bold mb-0">Date</span></th> 
                    <!-- db => leavedate -->
                    <th><span class="h4 font-weight-bold mb-0">Reason</span></th> 
                    <!-- db => leavereason -->
                    <th><span class="h4 font-weight-bold mb-0">Status</span></th> 
                  </tr>
                </thead>
<tbody>
        @forelse($items as $e=>$item)
        <tr>
            <td>{{ $e+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->department }}</td>
            <td>{{ date('d M Y', strtotime($item->leavedate)) }}</td>
            <td>{{ $item->leavereason }}</td>
            <td>
            @if ($item->status == 0)
            <span class='badge badge-warning'>Pending</span>
            @elseif ($item->status == 1)
            <span class='badge badge-success'>Approved</span>
            @else 
            <span class='badge badge-danger'>Rejected</span>
            @endif
          </td>
          <!-- <td><a href="{{route('rejected', $item->id)}}" class="btn btn-sm btn-danger">Rejected</a><a href="{{route('approved', ['id'=>$item->id])}}" class="btn btn-sm btn-success">Approved</a></td> -->
            </tr>

@empty
<tr><td colspan="6" class="text-center">Data Tidak Ditemukan</td></tr>
@endforelse
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset ('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset ('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset ('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset ('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
