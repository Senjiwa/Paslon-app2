@extends('layouts.navbar')

@section('content1')

    <div>
            <a href="/paslon" class="btn btn-secondry"><< Kembali</a>
            <h1>{{$item['nama']}}</h1>
            <p>
                <b>no</b>{{$item['dapil']}}
            </p>

            <p>
                <b>Fraksi</b>{{$data->fraksi}}
            </p>

    </div>



@endsection()