@extends('layouts.back.inc.app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    <a href="{{ route('berita.create') }}" class="btn btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Data Berita</span>
    </a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-important alert-info alert-dismissible" role="alert">
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            </div>
                            <div>
                                {{ session('success') }}
                            </div>
                        </div>
                        <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="50px">No.</th>
                                <th >Judul</th>
                                <th class="text-center">Slider</th>
                                <th width="500px" class="text-center">Gambar</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($berita as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row->judul }}</td>
                                <td class="text-center">
                                    <label class="switch">
                                        <input type="checkbox" class="btn-slider" {{ $row->is_slider == 1 ? 'checked' : '' }} id="switch-{{$row->id}}" onchange="setSlider({{ $row->id }}, {{ $row->is_slider }});">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <img width="20%" src="{{asset('upload/berita/').'/'.$row->gambar}}" />
                                </td>
                                <td class="d-flex"> 
                                    <a href="{{ route('berita.edit', $row->id) }}" class="btn btn-primary btn-sm ml-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('berita.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
</div>


@endsection