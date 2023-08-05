@extends('layouts.navbar')

@section('content1')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-primary">
                    <b>Success!</b> {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('profile-update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>Name</label>
                    <input class="form-control" placeholder="Name" value="{{ $user->name }}" name="name">
                </div>
                <div class="form-group mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group mb-3">
                    <label>Dapil</label>
                    <select class="form-control " id="dapil" name="dapil">
                        <option value="">List Dapil</option>
                        @foreach($dapil as $row)
                            <option value="{{ $row->id }}" {{ $user->dapil == $row->id ? 'selected' : '' }}>{{ $row->nama_dapil }}</option>
                        @endforeach
                    </select>
                    <div id="show-daerah"></div>
                </div>

                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="New Password" name="password">
                    <small id="emailHelp" class="form-text text-muted">Isi hanya jika ingin mengganti password</small>
                </div>

                <div class="form-group mb-3">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm New Password" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
