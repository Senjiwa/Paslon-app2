@extends('layouts.navbar')

@section('content1')

    <div>
            <a href="/paslon" class="btn btn-secondry"><< Kembali</a>
            <h1>{{$data->nama}}</h1>
            <p>
                <b>no</b>{{$data->no}}
            </p>

            <p>
                <b></b>
            </p>

    </div>



@endsection()