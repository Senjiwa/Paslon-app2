@extends('layouts.navbar')

@section('content1')

    <div>   
            <a href="/paslon" class="btn btn-secondry"><< Kembali</a>
            <h1></h1>
            <p>
                <b>Dapil</b>
            </p>

            <p>
                <b>Fraksi</b>{{ $barang->kode_barang }}
            </p>

    </div>



@endsection()