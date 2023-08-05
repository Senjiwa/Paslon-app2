<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Input</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <!-- nav CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div>
        <!--bar -->
   <nav id="Nav" class="navbar navbar-expand-lg navbar-light fs-5">
       <!-- warna navbar -->
       <div class="container">
           <a href="/" class="navbar-brand ">MyCalon</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
 
           <div class="collapse navbar-collapse fw-normal" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mr-1" class="fontberanda">
                   <li class="nav-item ">
                       <a class="nav-link " href="/" class="warnaln">Beranda<span class="sr-only"></span></a>
                   </li>
                    <li class="nav-item">
                       <a class="nav-link  " href="/paslon">Daftar Paslon</a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link " href="/input">Input</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="/profil">Profil</a>
                    </li>
               </ul>
               <!-- icon -->            
               <form id="login" class="form-inline my-2 my-lg-0 ml-6" action="/login">
                   <button class="btn btn-outline my-2 my-sm-0" type="submit"><i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Login</button>
               </form>
           </div>
       </div>
   </nav>
   </div>
<!--end -->


@yield('content2')



<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>


<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->