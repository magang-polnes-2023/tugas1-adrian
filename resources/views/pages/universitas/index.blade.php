@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Universitas</h1>
        <a href="{{ route('universitas.create') }}" class="btn btn-primary">Masukkan Universitas</a>
    </div>
    <hr />
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Universitas</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Akreditas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($universitas->count() > 0)
                @foreach($universitas as $univ)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $univ->nama }}</td>
                        <td class="align-middle">{{ $univ->no_telp }}</td>
                        <td class="align-middle">{{ $univ->email }}</td>
                        <td class="align-middle">{{ $univ->akreditas }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('universitas.show', $univ->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('universitas.edit', $univ->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form class="btn btn-danger p-0" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data Universitas Terpilih?');" action="{{ route('universitas.destroy', $univ->id) }}" method="POST">
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
                    <td class="text-center" colspan="7">Data Universitas Tidak Ada</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $universitas->onEachSide(1)->links() }}
@endsection