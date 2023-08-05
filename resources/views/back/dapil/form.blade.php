@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dapil</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Dapil</h6>
                
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ $pages === 'create' ? route('dapil.store') : route('dapil.update', $dapil->id) }}" method="post">
                    @csrf

                    @if($pages === 'edit')
                        @method('PUT')
                    @endif

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

                    <div class="form-group">
                        <label>Nama Dapil</label>
                        <input class="form-control" name="nama_dapil" placeholder="Masukan Nama Dapil" value="{{ isset($dapil->nama_dapil) ? $dapil->nama_dapil : old('nama_dapil') }}">
                    </div>
                    <div class="form-group">
                        <label>Daerah</label>
                        <input class="form-control" name="daerah" placeholder="Masukan Nama Daerah" value="{{ isset($dapil->daerah) ? $dapil->daerah : old('daerah') }}">
                        <small class="form-text text-muted">Jika daerah lebih dari 1 maka pisahkan dengan tanda koma</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection