@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Universitas</h1>
        <a href="{{ route('universitas.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Universitas</label>
            <input type="text" name="nama" class="form-control" value="{{ $universitas->nama }}" placeholder="Nama Universitas" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Detail Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Detail Alamat" readonly>{{ $universitas->alamat }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nomor Telephone</label>
            <input type="number" name="no_telp" class="form-control" value="{{ $universitas->no_telp }}" placeholder="Nomor Telephone" readonly>
        </div>
        <div class="col">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $universitas->email }}" placeholder="Email Universitas" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Akreditas</label>
            <input type="text" name="akreditas" class="form-control" value="{{ $universitas->akreditas }}" placeholder="Akreditas Universitas" readonly>
        </div>
    </div>
@endsection