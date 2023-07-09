<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universitas;
use Illuminate\Support\Facades\Storage;

class UnivController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Response;
     */
    public function index()
    {
        $universitas = Universitas::latest()->paginate(5);
        return view('pages.universitas.index', compact('universitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.universitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'akreditas' => 'required',
        ]);

        Universitas::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'akreditas' => $request->akreditas
        ]);

        return redirect()->route('universitas.index')->with('success', 'Data Universitas Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universitas = Universitas::findOrFail($id);

        return view('pages.universitas.show', compact('universitas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
