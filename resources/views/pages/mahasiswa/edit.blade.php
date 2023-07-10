@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Data Mahasiswa</h1>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <hr />
    <form action="{{ route('mahasiswa.update', $mahasiswas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="row text-center mb-3">
                    <img src="{{ asset('storage/posts/'.$mahasiswas->profil) }}" class="img-thumbnail rounded">
                </div>
                <div class="row mb-3">
                    <input class="form-control" name="profil" type="file" id="profil">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Mahasiswa</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswas->nama }}" placeholder="Nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-label">Pilih Universitas</div>
                        <select class="form-control select" name="universitas_id" id="universitas_id"> 
                            @foreach ($univ as $univ)
                                <option value="{{ $univ->id }}" {{ $univ->id == $mahasiswas->universitas_id ? 'selected' : '' }}>
                                    {{ $univ->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">NIM</label>
                        <input type="number" name="nim" class="form-control" value="{{ $mahasiswas->nim }}" placeholder="NIM">
                    </div>
                    <div class="col">
                        <div class="row">
                            <label class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Laki-laki" {{ $mahasiswas->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Perempuan" {{ $mahasiswas->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $mahasiswas->tanggal_lahir }}" placeholder="Tanggal Lahir">
                    </div>
                    <div class="col">
                        <label class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control" value="{{ $mahasiswas->umur }}" placeholder="Umur">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nomor Telephone</label>
                        <input type="number" name="no_telp" class="form-control" value="{{ $mahasiswas->no_telp }}" placeholder="Telephone">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Detail Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Detail Alamat">{{ $mahasiswas->alamat }}</textarea>
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