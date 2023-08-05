@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Caleg</h1>
</div>

<div class="container">
    <div class="card shadow mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Edit Paslon
                    </h6>
                    
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tambah.update', $paslon->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        
                    <div class="col-4">
                        <div class="form-group">
                        <div class="name">No Urut</div>
                            <div class="value">
                                <input type="text" name="no" class="form-control" aria-label="Sizing example input" value="{{ $paslon->no }}" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        </div>

                        <div class="col-4">
                        <div class="form-group">
                        <div class="name">Nama</div>
                            <div class="value">
                                <input type="text" name="nama" class="form-control" value="{{ $paslon->nama }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                
                            </div>
                        </div>
                        </div>
                            
                        <div class="col-4">
                            <div class="form-group">
                                <div class="name">Agama</div>
                                <div class="value">
                                    <select class="form-control" name="agama">
                                        <option>-</option>
                                        @foreach($agama as $value)
                                            <option value="{{ $value }}" {{ $paslon->agama == $value ? 'selected' : '' }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <div class="name">Fraksi</div>
                            <div class="value">
                                <select class="form-control" name="fraksi" {{ Auth::guard('adminMiddle')->user()->role == 'partai' ? 'disabled' : '' }}>
                                    <option>-</option>
                                    @foreach($fraksi as $row)
                                        <option value="{{ $row->id }}" {{ $paslon->fraksi == $row->id ? 'selected' : '' }}>{{ $row->nama_fraksi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <div class="name">Dapil</div>
                                <div class="value">
                                    <select id="dapil" class="form-control" name="dapil">
                                        <option value="">-</option>
                                        @foreach($dapil as $row)
                                            <option value="{{ $row->id }}" {{ $paslon->dapil == $row->id ? 'selected' : '' }}>{{ $row->nama_dapil }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="show-daerah"></div>
                            </div>
                        </div>

                    </div>
                        
                    <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description" class="text-small text-uppercase">Riwayat pendidikan</label>
                                    <textarea name="r_pen" rows="3" class="form-control summernote">{{ $paslon->r_pen }}</textarea>
                                </div>
                            </div>
                        

                        
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="details" class="text-small text-uppercase">Riwayat Pekerjaan</label>
                                    <textarea name="r_pek" rows="3" class="form-control summernote">{{ $paslon->r_pek }}</textarea>
                                </div>
                            </div>
                        
                        
                        
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="details" class="text-small text-uppercase">Gambar</label>
                                    <input type="file" name="gambar" id="gamabr" class="form-control" accept="image/" onchange="document.getElementyById('output').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            <div class="mt-3"><img src="" id="output" alt=""></div>
                        </div>

                    
                </div>
                <div class="card-footer ">
                    <button class="btn btn-lg btn-primary btn-login" type="submit">Save</button>
                </div>
                    </form>
                
            </div>
        </div>
    </div>




    @endsection()