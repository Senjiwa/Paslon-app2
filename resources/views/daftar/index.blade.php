@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Palon</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                <a href="{{ route('tambah.create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Partai</th>
                        <th>Dapil</th>
                        <th width="150px">Gambar</th>
                        <th width="150px">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($paslon as $item => $row)
                    <tr>
                        <th>{{$row->no}}</th>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->nama_fraksi}}</td>
                        <td>{{$row->nama_dapil}}</td>
                        <td class="text-center">
                            <img width="100%" src="{{asset('upload/paslon').'/'.$row->gambar}}" />
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('tambah.edit', $row->id) }}" class="btn btn-primary btn-sm mr-1">
                                Edit
                            </a>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tambah.destroy', $row->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    
    
                </table>
    
            </div>
        </div>
    </div>
</div>


@endsection