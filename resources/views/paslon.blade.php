@extends('layouts.navbar')

@section('content1')

<div class="container col-md-10 justify-content-center">
  <!-- Header-->
  <header class="py-1">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/img/banner.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/bg1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/banner.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  </header>
</div>
 
<section class="py-4">

    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          @foreach($paslon as $row)
          <div class="col-md-4 mb-5 paslon">
                <div class="card h-100">
                    <!-- <div class="badge bg-dark text-white position-absolute fs-6" style="top: 0.5rem; right: 0.5rem">123</div> -->
                    <img class="card-img-top" src="{{asset('upload/paslon/').'/'.$row->gambar}}" alt="..." />
                    <div class="card-body p-1">
                        <div class="text-center">
                            <h5 class="fw-bolder">{{ $row->nama }}</h5>
                            <h6>{{ $row->fraksi }}</h5>  
                        </div>
                        <div class="d-flex justify-content-center mb-2"> {{ $row->nama_dapil }}</div>
                    </div>
                    
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-dark" href="{{ route('detail-paslon', $row->id) }}">Show</a></div>
                    </div>
                </div>                        
            </div>
          @endforeach
        </div>
    </div>
    
</section>

<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
</footer>

@endsection()