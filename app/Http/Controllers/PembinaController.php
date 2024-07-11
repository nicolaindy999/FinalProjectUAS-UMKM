<?php

namespace App\Http\Controllers;

use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembinas = Pembina::all();
        return view('pembina.index', compact('pembinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'gender' => 'required|string|max:1',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string|max:30',
            'keahlian' => 'required|string|max:200',
        ]);

        Pembina::create($request->all());

        return redirect()->route('pembina.index')->with('success', 'Pembina created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembina $pembina)
    {
        return view('pembina.show', compact('pembina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembina $pembina)
    {
        return view('pembina.edit', compact('pembina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembina $pembina)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'gender' => 'required|string|max:1',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string|max:30',
            'keahlian' => 'required|string|max:200',
        ]);

        $pembina->update($request->all());

        return redirect()->route('pembina.index')->with('success', 'Pembina updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembina $pembina)
    {
        $pembina->delete();

        return redirect()->route('pembina.index')->with('success', 'Pembina deleted successfully.');
    }
}
