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
                <div class="row">
                    <label class="form-label">Akreditasi</label>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akreditas" id="flexRadioDefault1" value="A">
                                <label class="form-check-label" for="flexRadioDefault1">A</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akreditas" id="flexRadioDefault1" value="B">
                                <label class="form-check-label" for="flexRadioDefault1">B</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akreditas" id="flexRadioDefault1" value="C">
                                <label class="form-check-label" for="flexRadioDefault1">C</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection