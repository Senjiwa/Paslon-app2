@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ $pages === 'create' ? route('berita.store') : route('berita.update', $berita->id) }}" method="post">
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
                        <label>Judul Berita</label>
                        <input class="form-control" name="judul" placeholder="Judul Berita" value="{{ isset($berita->judul) ? $berita->judul : old('judul') }}">
                    </div>
                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea class="summernote" name="isi_berita">{{ isset($berita->isi_berita) ? $berita->isi_berita : old('isi_berita') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar_berita" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection