<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Storage;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Response;
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('pages.mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $this->validate($request, [
            'nama' => 'required',
            'nim' => 'required',
            'no_telp' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'profil' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $profil = $request->file('profil');
        $profil->storeAs('public/posts', $profil->hashName());

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'no_telp' => $request->no_telp,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'profil' => $profil->hashName()
        ]);

        return redirect()->route('mahasiswa.index')->with(['success', 'Data Mahasiswa Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);

        return view('pages.mahasiswa.show', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);

        return view('pages.mahasiswa.edit', compact('mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form
        $this->validate($request, [
            'nama' => 'required',
            'nim' => 'required',
            'no_telp' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'profil',
        ]);

        $mahasiswas = Mahasiswa::findOrFail($id);

        if ($request->hasFile('profil')) {

            $profil = $request->file('profil');
            $profil->storeAs('public/posts', $profil->hashName());
            
            Storage::delete('public/posts'.$mahasiswas->profil);

            $mahasiswas->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'no_telp' => $request->no_telp,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'profil' => $profil->hashName()
            ]);

        } else {
            $mahasiswas->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'no_telp' => $request->no_telp,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);
        }

        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Mahasiswa Berhasil di Update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);

        Storage::delete('public/posts'. $mahasiswas->profil);

        $mahasiswas->delete();

        return redirect()->route('mahasiswa.index')-> with(['success' => 'Data Mahasiswa Berhasil di Hapus']);
    }
}
