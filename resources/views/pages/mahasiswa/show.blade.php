@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
            <div class="text-center">
                <img src="{{ asset('storage/posts/'.$mahasiswas->profil) }}" class="img-thumbnail rounded">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswas->nama }}" placeholder="Nama" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-label">Pilih Universitas</div>
                    <input type="text" name="universitas_id" class="form-control" value="{{ $mahasiswas->universitas->nama }}" placeholder="Universitas" readonly>
                </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">NIM</label>
                    <input type="number" name="nim" class="form-control" value="{{ $mahasiswas->nim }}" placeholder="NIM" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" value="{{ $mahasiswas->jenis_kelamin }}" placeholder="Jenis Kelamin" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $mahasiswas->tanggal_lahir }}" placeholder="Tanggal Lahir" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control" value="{{ $mahasiswas->umur }}" placeholder="Umur" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nomor Telephone</label>
                    <input type="number" name="no_telp" class="form-control" value="{{ $mahasiswas->no_telp }}" placeholder="Telephone" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Detail Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Detail Alamat" readonly>{{ $mahasiswas->alamat }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection