@extends('layouts.navbar')

@section('content1')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">Nama Paslon</th>
                    <th class="text-center">Nama Dapil</th>
                    <th class="text-center">Jumlah Pemilih</th>
                </tr>
                @foreach($coblos as $row)
                <tr>
                    <td class="text-center">{{ $row['nama'] }}</td>
                    <td class="text-center">{{ $row['dapil'] }}</td>
                    <td class="text-center">{{ $row['jumlah_coblos'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
