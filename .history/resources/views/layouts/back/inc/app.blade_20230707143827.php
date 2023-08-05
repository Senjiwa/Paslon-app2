<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        
        <link rel="stylesheet" href="{{asset('back/css/sb-admin-2.css')}}">
        <link rel="stylesheet" href="{{asset('back/vendor/bootstrap/bootstrap.js')}}">
      </head>
      <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->

            @section('sidebar')
                @include('layouts.back.inc.sidebar')
            @show

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->

            @section('headbar')
                @include('layouts.back.inc.header')
            @show

                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <script src="{{asset('backjs/scripts.js')}}"></script>
    </body>
</html>
