<?php

namespace App\Http\Controllers;

use App\Models\KategoriUMKM;
use Illuminate\Http\Request;

class KategoriUMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriUMKMs = KategoriUMKM::all();
        return view('kategori_umkm.index', compact('kategoriUMKMs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori_umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        KategoriUMKM::create($request->all());

        return redirect()->route('kategori_umkm.index')->with('success', 'Kategori UMKM created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriUMKM $kategoriUMKM)
    {
        return view('kategori_umkm.show', compact('kategoriUMKM'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriUMKM $kategoriUMKM)
    {
        return view('kategori_umkm.edit', compact('kategoriUMKM'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriUMKM $kategoriUMKM)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        $kategoriUMKM->update($request->all());

        return redirect()->route('kategori_umkm.index')->with('success', 'Kategori UMKM updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriUMKM $kategoriUMKM)
    {
        $kategoriUMKM->delete();

        return redirect()->route('kategori_umkm.index')->with('success', 'Kategori UMKM deleted successfully.');
    }
}
