<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-commerce</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('Admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('Admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('Admin/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{ asset('Admin/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Nouveau ici?</h4>
              <h6 class="font-weight-light">Rejoignez-nous aujourd'hui</h6>
              <form class="pt-3" method="post" action="{{ route('Inscription.store') }}" enctype="multipart/form-data" >
                  @method('post')
                  @csrf
                <div class="form-group">
                  <label>Nom</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="" name="nom_admn">
                    @error("nom_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Prenom</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="" name="prenom_admn">
                    @error("prenom_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>

                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" placeholder="" name="email_admn">
                    @error("email_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>N° Téléphone</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-cellphone text-primary"></i>
                      </span>
                    </div>
                    <input type="number" class="form-control form-control-lg border-left-0" placeholder="" name="numero_admn">
                    @error("nom_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Lieu de résidence</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-home-modern text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="" name="residence_admn">
                    @error("residence_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Photo</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-camera-enhance text-primary"></i>
                      </span>
                    </div>
                    <input type="file" class="form-control form-control-lg border-left-0" placeholder="" name="photo_admn">
                    @error("photo_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Mot de passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="" name="password_admn">
                    @error("password_admn")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Confirmation de mot de passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="" name="password_admn2">
                    @error("password_admn2")
                    <span style="color:red;">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="mt-3">
                <input type="submit" class="btn btn-primary btn-rounded btn-lg" name="valider" value="S'inscrit">
                <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous avez déjà un compte? <a href="#" class="text-primary">Se connecter</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
