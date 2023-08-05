@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Admin Partai</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Admin Partai</h6>
                
            </div>
            <div class="card-body">
                <form action="{{ $pages === 'create' ? route('admin-partai.store') : route('admin-partai.update', $admin->id) }}" method="post">
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
                        <label>Nama Admin</label>
                        <input class="form-control" name="name" placeholder="Masukan Nama" value="{{ isset($admin->name) ? $admin->name : old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Email Admin</label>
                        <input class="form-control" name="email" placeholder="Masukan Email" value="{{ isset($admin->email) ? $admin->email : old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Fraksi</label>
                        <select class="form-control" name="fraksi">
                            <option value="">Pilih Fraksi</option>
                            @foreach($fraksi as $row)
                                <option value="{{ $row->id }}" {{ isset($admin->fraksi) ? ($admin->fraksi == $row->id ? 'selected' : '') : (old('fraksi') == $row->id ? 'selected' : '') }}>{{ $row->nama_fraksi }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if($pages === 'create')
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                    </div>

                    <div class="form-group">
                        <label>Password Konfirmasi</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Masukan Password Konfirmasi">
                    </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection