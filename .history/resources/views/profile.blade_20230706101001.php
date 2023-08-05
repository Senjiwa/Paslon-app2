@extends('layouts.navbar')

@section('content1')

<section style="background-color: #eee;">
    <div class="container py-5">
      
  
      <div class="row">
        
        <div class="card mb-4">
            
            <div class="card-body text-center">
              <img src="/img/6.jpg" alt="avatar"
                class="rounded img-fluid" style="width: 150px;">
              <h5 class="my-3">{{$data->nama}}</h5>
              <p class="text-muted mb-1">Fraksi {{$data->fraksi}}</p>
              <p class="text-muted mb-4">Daerah Pemilihan   {{$data->dapil}}</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
<!--- batas -->
        <div class="col-lg-4">
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$data->nama}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tempat Lahir / Tgl Lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$data->nama}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Agama</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$data->agama}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="">
                  <p class="mb-0">Riwayat Pendidikan</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$data->r_pen}}</p>
                </div>
              </div>
              <hr>
              
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  @endsection()