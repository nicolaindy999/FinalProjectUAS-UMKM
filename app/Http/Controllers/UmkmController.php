<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_umkm = Umkm::all();
        $umkms = Umkm::select('nama')->get();
        // return view('index', compact('umkms','list_umkm')); 
        return view('umkm.index', compact('umkms','list_umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'modal' => 'nullable|numeric',
            'pemilik' => 'required|string|max:45',
            'alamat' => 'required|string|max:100',
            'website' => 'required|string|max:45',
            'email' => 'required|string|max:45|email',
            'kabkota_id' => 'required|integer',
            'rating' => 'nullable|integer',
            'kategori_umkm_id' => 'required|integer',
            'pembina_id' => 'required|integer',
        ]);
        UMKM::create([
            'nama' => $request->nama,
            'modal'=> $request->modal,
            'pemilik'=> $request->pemilik,
            'alamat'=> $request->alamat,
            'website'=> $request->website,
            'email'=> $request->email,
            'kabkota_id'=> $request->kabkota_id,
            'rating'=> $request->rating,
            'kategori_umkm_id'=> $request->kategori_umkm_id,
            'pembina_id'=> $request->pembina_id,
        ]);

        return redirect()->route('umkm.index')->with('success', 'UMKM created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UMKM $umkm)
    {
        return view('umkm.show', compact('umkm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UMKM $umkm)
    {// Tambahkan ini untuk debugging
         return view('umkm.edit', compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UMKM $umkm)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'modal' => 'required|integer',
        'pemilik' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'website' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'kabkota_id' => 'required|integer',
        'rating' => 'nullable|integer',
        'kategori_umkm_id' => 'required|integer',
        'pembina_id' => 'required|integer',
    ]);

    $umkm->update($request->all());

    return redirect()->route('umkm.index')->with('success', 'UMKM updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UMKM $umkm)
    {
        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'UMKM deleted successfully.');
        
    }
}
