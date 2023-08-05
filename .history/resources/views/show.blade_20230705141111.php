@extends('layouts.navbar')

@section('content1')

    <div>   
        @foreach ($show as $item)
            <a href="/paslon" class="btn btn-secondry"><< Kembali</a>
            <h1></h1>
            <p>
                <b>Dapil</b>{{$item['nama']}}
            </p>

            <p>
                <b>Fraksi</b>
            </p>
            @endforeach
    </div>



@endsection()