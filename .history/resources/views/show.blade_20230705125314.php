@extends('layouts.navbar')

@section('content1')

    <div>
            <a href="/paslon" class="btn btn-secondry"><< Kembali</a>
            <h1>{{$data['nama']}}</h1>
            <p>
                <b>Dapil</b>{{$data['dapil']}}
            </p>

            <p>
                <b>Fraksi</b>{{$item['fraksi']}}
            </p>

    </div>



@endsection()