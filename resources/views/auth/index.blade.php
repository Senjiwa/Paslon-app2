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
        <form class="form-signin" method="POST" action="{{ route('store-login') }}">
            @csrf
            <div class="row mb-4">
                <div class="col-md-6">
                    <a href="" class="btn btn-primary w-100">User</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('admin.login') }}" class="btn btn-success w-100">Admin </a>
                </div>
            </div>
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-primary">
                    <b>Hooray!</b> {{ session('success') }}
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
            
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            
            <button class="btn btn-primary btn-block " type="submit">Sign in</button>

            <div class="register text-center mt-3">
                <label>Tidak punya akun ? daftar <a href="{{ route('register-page') }}">disini</a> </label>
            </div>

        </form>
    </div>
    
  </body>
</html>