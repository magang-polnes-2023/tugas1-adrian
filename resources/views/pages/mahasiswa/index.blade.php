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
                <th>Universitas</th>
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
                        <td class="align-middle">{{ $mhs->universitas->nama }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('mahasiswa.show', $mhs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form class="btn btn-danger p-0" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data Mahasiswa Terpilih?');" action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Data Mahasiswa Tidak Ada</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $mahasiswas->onEachSide(1)->links() }}
@endsection