<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>

        <link href="{{asset('back/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="{{asset('back/css/sb-admin-2.css')}}">

         <!-- Custom styles for this page -->
        <link href="{{asset('back/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

        <link href="{{asset('back/vendor/summernote/summernote-bs4.min.css')}}" rel="stylesheet">
        
      </head>
      <body>
            <div id="wrapper">

                @section('sidebar')
                    @include('layouts.back.inc.sidebar')
                @show

                <div id="content-wrapper" class="d-flex flex-column">
                    <div id="content">

                        @section('headbar')
                            @include('layouts.back.inc.header')
                        @show

                        <div class="container-fluid">

                            @yield('content')

                        </div>

                    </div>

                    @section('footer')
                        @include('layouts.back.inc.footer')
                    @show

                </div>
            </div>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('back/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('back/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('back/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('back/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('back/js/sb-admin-2.min.js')}}"></script>

    <script src="{{asset('back/vendor/summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
            $('.summernote').summernote({
                placeholder: 'Isi berita',
                tabsize: 2,
                height: 200
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

        function setSlider(id, checked) {
            if(confirm(checked == 0 ? "Ingin menjadikanya slider?" : "Ingin membatalkan slider?")){
                window.location.href = '/admin/berita/slider/'+id
            } else {
                if(checked == 0) {
                    document.getElementById(`switch-${id}`).checked = false;
                } else {
                    document.getElementById(`switch-${id}`).checked = true;
                    
                }
                
                return false;
            }
        }
    </script>

    </body>
</html>
