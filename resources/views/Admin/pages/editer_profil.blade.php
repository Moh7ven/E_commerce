@extends("Admin.layouts.master")

@section("contenu")
  <link rel="stylesheet" href="{{asset('Admin/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/css/font-awesome.min.css')}}">

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded">
                        <img src="{{asset('storage/'.$data->photo_admn)}}" style="height: 140px; width: 140px; border-radius:100px;">
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$data->nom_admn.' '.$data->prenom_admn}}</h4>
                    <p class="mb-0">{{$data->email_admn}}</p>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrateur</span>
                    <div class="text-muted"><small><b>Depuis</b> {{$data->created_at}}</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Mes informations</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                <form class="pt-3" method="post" action="{{ route('update') }}" enctype="multipart/form-data" >
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
                        <input type="text" class="form-control form-control-lg border-left-0" placeholder="" name="nom_admn" value="{{$data->nom_admn}}">
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
                        <input type="text" class="form-control form-control-lg border-left-0" placeholder="" name="prenom_admn" value="{{$data->prenom_admn}}">
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
                        <input type="email" class="form-control form-control-lg border-left-0" placeholder="" name="email_admn" value="{{$data->email_admn}}">
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
                        <input type="number" class="form-control form-control-lg border-left-0" placeholder="" name="numero_admn" value="{{$data->numero_admn}}">
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
                        <input type="text" class="form-control form-control-lg border-left-0" placeholder="" name="residence_admn" value="{{$data->residence_admn}}">
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
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Modifier</button>
                        </div>
                    </div>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-danger">
                <i class="fa fa-sign-out"></i>
                <span>Deconnexion</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Obtenez une aide rapide et gratuite de nos sympathiques assistants.</p>
            <button type="button" class="btn btn-primary">Contactez-nous</button>
          </div>
        </div>
      </div>
    </div>

  <!-- </div>
</div>
</div> -->
<script src="{{asset('Admin/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('Admin/js/bootstrap.bundle.min.js')}}"></script>

<style type="text/css">
body{
    margin-top:20px;
    background:#f8f8f8
}
</style>
@endsection
