@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Universitas</h1>
        <a href="{{ route('universitas.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <hr />
    <form action="{{ route('universitas.update', $universitas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Universitas</label>
                <input type="text" name="nama" class="form-control" value="{{ $universitas->nama }}" placeholder="Nama Universitas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Detail Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Detail Alamat">{{ $universitas->alamat }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nomor Telephone</label>
                <input type="number" name="no_telp" class="form-control" value="{{ $universitas->no_telp }}" placeholder="Nomor Telephone">
            </div>
            <div class="col">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $universitas->email }}" placeholder="Email Universitas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="row">
                    <label class="form-label">Akreditasi</label>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akreditas" id="flexRadioDefault1" value="A" {{ $universitas->akreditas == 'A' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">A</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akreditas" id="flexRadioDefault1" value="B" {{ $universitas->akreditas == 'B' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">B</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akreditas" id="flexRadioDefault1" value="C" {{ $universitas->akreditas == 'C' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">C</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection