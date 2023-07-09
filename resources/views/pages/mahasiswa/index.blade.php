@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
    <hr />
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Profil</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Telp.</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($mahasiswas->count() > 0)
                @foreach($mahasiswas as $mhs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">
                            <img src="{{ asset('/storage/posts/'.$mhs->profil) }}" class="rounded" style="width: 70px">
                        </td>
                        <td class="align-middle">{{ $mhs->nama }}</td>
                        <td class="align-middle">{{ $mhs->nim }}</td>
                        <td class="align-middle">{{ $mhs->no_telp }}</td>
                        <td class="align-middle">{{ $mhs->jenis_kelamin }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('mahasiswa.show', $mhs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Data Mahasiswa Tidak Ada</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $mahasiswas->onEachSide(1)->links() }}
@endsection