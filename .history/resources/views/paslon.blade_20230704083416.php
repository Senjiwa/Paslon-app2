@extends('layouts.navbar')

@section('content1')
<div class="row mt-3 no-gutters">

    
</div>
</div>
        <!-- Section-->
        
        <section class="py-4">

            <div class="container col-md-2 justify-content-center py-4">
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                      Fraksi
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
    
                  <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                      Dapil
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
    
            </div>

            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($data as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute fs-6" style="top: 0.5rem; right: 0.5rem">{{$item['no']}}</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="/img/6.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-1">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$item['nama']}}</h5>
                                    <!-- Product Dapil-->
                                    <h6>{{$item['fraksi']}}</h5>  
                                </div>
                                <div class="d-flex justify-content-center mb-2"> DAPIL
                                    {{$item['dapil']}}
                                </div>
                            </div>
                            
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark" href="{{ url('/paslon/'.$item->id)}}">Show</a></div>
                            </div>
                        </div>                        
                    </div>
                    
                    @endforeach
                </div>
            </div>
            
        </section>
        
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection()