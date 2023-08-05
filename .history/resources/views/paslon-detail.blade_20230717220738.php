@extends('layouts.navbar')

@section('content1')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img width="100%" src="{{asset('upload/paslon/').'/'.$paslon->gambar}}" alt="Card image cap">
        </div>
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <div class="d-flex">
                    <div>
                        <div class="text-alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-important alert-info alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            {{ session('success') }}
                        </div>
                    </div>
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif

            <div class="content-bio">
                <label>Nama</label>
                <p>{{ $paslon->nama }}</p>
            </div>
            <div class="content-bio">
                <label>Fraksi</label>
                <p>{{ $paslon->fraksi }}</p>
            </div>
            <div class="content-bio">
                <label>Dapil</label>
                <p>{{ $paslon->nama_dapil }}</p>
            </div>
            <div class="content-bio">
                <label>Agama</label>
                <p>{{ $paslon->agama }}</p>
            </div>
            <div class="content-bio">
                <label>Riwayat Pendidikan</label>
                <div>{!! $paslon->r_pen !!}</div>
            </div>
            <div class="content-bio">
                <label>Riwayat Pekerjaan</label>
                <div>{!! $paslon->r_pek !!}</div>
            </div>
            
            <form onsubmit="return confirm('Apakah untuk memilih caleg ini?');" action="{{ route('coblos', $paslon->id) }}" method="POST">
                @csrf
                {!! htmlFormSnippet() !!}
                <button type="submit" class="w-100 btn btn-primary mt-3">Coblos</button>
            </form>
        </div>
    </div>
</div>

@endsection
