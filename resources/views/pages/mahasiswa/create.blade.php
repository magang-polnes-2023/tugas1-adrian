@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Tambah Data Mahasiswa</h1>
    <hr />

    <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="number" name="nim" class="form-control" placeholder="NIM">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="no_telp" class="form-control" placeholder="Telephone">
            </div>
            <div class="col">
                <input type="number" name="umur" class="form-control" placeholder="Umur">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea name="alamat" class="form-control" placeholder="Detail Alamat"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
            <div class="col">
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="profil" class="form-control" placeholder="Foto Mahasiswa">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection