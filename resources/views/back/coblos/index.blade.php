@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dapil</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Coblos</h6>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Paslon</th>
                                <th class="text-center">Nama Dapil</th>
                                <th class="text-center">Jumlah Pemilih</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($coblos as $row)
                            <tr>
                                <td class="text-center">{{ $row['nama'] }}</td>
                                <td class="text-center">{{ $row['dapil'] }}</td>
                                <td class="text-center">{{ $row['jumlah_coblos'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection