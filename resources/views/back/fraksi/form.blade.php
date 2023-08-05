@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Fraksi</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Fraksi</h6>
                
            </div>
            <div class="card-body">
                <form action="{{ $pages === 'create' ? route('fraksi.store') : route('fraksi.update', $fraksi->id) }}" method="post">
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
                        <label>Nama Fraksi</label>
                        <input class="form-control" name="nama_fraksi" placeholder="Masukan Nama Fraksi" value="{{ isset($fraksi->nama_fraksi) ? $fraksi->nama_fraksi : old('nama_fraksi') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection