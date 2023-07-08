@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Tambah Universitas</h1>
    <hr />

    <form action="{{ route('universitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Universitas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea name="alamat" class="form-control" placeholder="Detail Alamat"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="no_telp" class="form-control" placeholder="Nomor Telephone">
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email Universitas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="akreditas" class="form-control" placeholder="Akreditas Universitas">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection