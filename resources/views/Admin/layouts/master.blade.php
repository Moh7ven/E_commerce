<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-commerce</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('Admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('Admin/css/bootstrap.min.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{asset('Admin/css/font-awesome.min.css')}}"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('Admin/images/favicon.png')}}"/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{url('/')}}"><img src="{{asset('Admin/images/logo.svg')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{asset('Admin/images/logo-mini.svg')}}" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Recherche ..." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{asset('Admin/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Angèle KOUASSI
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Nous avons besoins nouveaux produits.
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('storage/'.$data->photo_admn)}}" alt="profile"/>
              <span class="nav-profile-name">{{$data->nom_admn.' '.$data->prenom_admn  }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Profil
              </a>
              <a class="dropdown-item" href="logout">
                <i class="mdi mdi-logout text-primary"></i>
                Déconnexion
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-basket menu-icon"></i>
              <span class="menu-title">Produits</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/buttons')}}">Ajouter des produits</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/typography')}}">Editer les produits</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('pages/forms/basic_elements.html')}}">
              <i class="mdi mdi-checkbox-marked-circle-outline menu-icon"></i>
              <span class="menu-title">Valider les commandes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#para" aria-expanded="false" aria-controls="para">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Paramètres</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="para">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/edit')}}">Editer mon profil</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{URL::to('/buttons')}}">Inviter un administrateur</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->

        @yield("contenu")

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('Admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('Admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('Admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('Admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Admin/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('Admin/js/dashboard.js')}}"></script>
  <script src="{{asset('Admin/js/data-table.js')}}"></script>
  <script src="{{asset('Admin/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('Admin/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->
  <!-- <script src="{{asset('Admin/js/jquery-1.10.2.min.js')}}"></script>
  <script src="{{asset('Admin/js/bootstrap.bundle.min.js')}}"></script> -->
</body>

</html>

