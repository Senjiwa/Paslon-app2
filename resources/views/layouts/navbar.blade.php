
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <script src="{{asset('back/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

    <title>PaslonKu</title>
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
  </head>
  <body>
   
    <!-- ======= Header ======= -->
  
  </section><!-- End Top Bar -->
  
        <!-- Navigation-->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light fs-5">
          
            <div class="container-fluid">
                <a class="navbar-brand" href="/">PASLONKU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                

                <div class="collapse navbar-collapse fw-normal" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mr-1" class="fontberanda">
                    <li class="nav-item ">
                        <a class="nav-link " href="/" class="warnaln">Beranda<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="/paslon">Daftar Paslon</a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link " href="{{ route('data-coblos') }}">Data Coblos</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('profile') }}">Profil</a>
                    </li>
                </ul>
                    <form class="d-flex">
                        @if(!Auth::guard('user')->check())
                            <a href="{{ route('login-page') }}" class="btn btn-outline-dark">
                                Login
                            </a>
                        @else
                            <a href="{{ route('logout') }}" class="btn btn-outline-dark">
                                Logout
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </nav>
<!--end -->

@yield('content1')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        $( document ).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });
            $('#dapil').on('change', function() {
                $.ajax({
                    url:"/auth/get-dapil/"+this.value,
                    method:"GET",
                    success:function(data)
                    {
                        $('#show-daerah').html(data);
                    }
                })
            });

        });
    </script>
    </body>
</html>