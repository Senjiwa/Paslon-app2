<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sign-in.css')}}" rel="stylesheet">

  </head>

  <body class="text-center">
    <div class="container">
        <form class="form-signin" method="POST" action="{{ route('store-register') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

            @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label class="sr-only">Name</label>
            <input class="form-control mb-3" name="name" placeholder="Name" value="{{ old('name') }}" autofocus>
            
            <label  class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control mb-3" name="email" placeholder="Email address" value="{{ old('email') }}">

            <div class="form-group mb-3">
                <label class="sr-only">Dapil</label>
                <select class="form-control " id="dapil" name="dapil">
                    <option value="">List Dapil</option>
                    @foreach($dapil as $row)
                        <option value="{{ $row->id }}" {{ old('dapil') == $row->id ? 'selected' : '' }}>{{ $row->nama_dapil }}</option>
                    @endforeach
                </select>
                <div id="show-daerah"></div>
            </div>
            
            
            <label class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">

            <label class="sr-only">Confirm Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password_confirmation" placeholder="Confirm Password" >
            
            <button class="btn btn-primary btn-block " type="submit">Sign up</button>

            <div class="register text-center mt-3">
                <label>Suda punya akun ? login <a href="#">disini</a> </label>
            </div>

        </form>
    </div>

    <script src="{{asset('back/vendor/jquery/jquery.min.js')}}"></script>
    <script>
        $( document ).ready(function() {
            
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