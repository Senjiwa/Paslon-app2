@extends('layouts.navbar')

@section('content1')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <img width="100%" src="{{asset('upload/berita/').'/'.$berita->gambar}}" alt="Card image cap">

            <div class="content-detail-berita mb-5">
                <h3>{{ $berita->judul }}</h3>
                <div class="date-news">
                    <span class="fas fa-calendar-alt"></span>
                    <label>{{ date('F d, Y', strtotime($berita->created_at)) }}</label>
                </div>
                {!! $berita->isi_berita !!}
            </div>
            
            <div id="display_comment"></div>
            <div class="content-comment">
                <textarea class="form-control" id="komentar" placeholder="Komentar..."></textarea>
                <input type="hidden" id="id_berita" value="{{ $berita->id }}" />
                <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary mt-3 right btn-comment" {{ Auth::guard('user')->check() ? '' : 'disabled' }} >Kirim Komentar</button></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        let token   = $("meta[name='csrf-token']").attr("content");
        load_comment()

        function load_comment()
        {
            $.ajax({
                url:"/get-komentar/{{ $berita->id }}",
                method:"GET",
                success:function(data)
                {
                    // $('#display_comment').html(data);
                    $('#display_comment').html(data.komentar);
                }
            })
        }

        $('.btn-comment').click(function(e) {
            if($('#komentar').val() == '') {
                alert('Komentar tidak boleh kosong');
                return null;
            }

            $.ajax({
                url: `/add-komentar`,
                type: "POST",
                cache: false,
                data: {
                    "id_berita" : $('#id_berita').val(),
                    "komentar": $('#komentar').val(),
                    "_token": token
                },
                success:function(response){
                    if(response.success) {
                        $('#komentar').val('');
                        load_comment()
                    }
                }
            })
        })

        $(document).on('click', '.btn-reply', function(){
            var id = $(this).attr('data-id');

            if($('#komentar-'+id).val() == '') {
                alert('Balasan tidak boleh kosong');
                return null;
            }

            $.ajax({
                url: `/add-reply`,
                type: "POST",
                cache: false,
                data: {
                    "id_berita" : $('#id_berita').val(),
                    "komentar": $('#komentar-'+id).val(),
                    "parent_id": id,
                    "_token": token
                },
                success:function(response){
                    if(response.success) {
                        $('#komentar-'+id).val('');
                        load_comment()
                    }
                }
            })
        });

    })

    function showFormReply(id)
    {
        var form = document.getElementById('form-komentar-'+id)
        form.classList.toggle("d-none");
    }
</script>
@endsection
