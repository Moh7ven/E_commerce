<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-COMMERCE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset ('Admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset ('Admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset ('Admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset ('Admin/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{asset('Admin/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Bienvenue</h4>
              <h6 class="font-weight-light">Content de vous revoir!</h6>
              <form class="pt-3" method="post" action="{{ route('login-user') }}">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="ex.user@gmail.com" name="email_admn" value="{{ old('email_admn') }}">
                    @error("email_admn")
                        span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Mot de passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Minimum 8 caractères" name="password_admn" value="{{ old('password_admn') }}">
                    @error("password_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Se rappeler de moi
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-primary btn-rounded btn-lg" name="connexion" value="Connexion">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous n'avez pas de compte? <a href="{{ route('Inscription.index')}}" class="text-primary">Créer</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2022  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('Admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('Admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('Admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Admin/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
