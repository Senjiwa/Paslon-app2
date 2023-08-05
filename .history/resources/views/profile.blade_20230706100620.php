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


        
        


      </div>
    </div>
  </section>
  @endsection()