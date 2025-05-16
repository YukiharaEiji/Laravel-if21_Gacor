<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses model Fakultas
        $fakultas = Fakultas::all();  // select * from fakultas
        // dd($fakultas);
        return view('fakultas.index')->with('fakultas', $fakultas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    //    dd($request);
        $input = $request->validate([
            'nama'=>'required|unique:fakultas',
            'singkatan'=>'required',
            'nama_dekan'=>'required',
            'nama_wadek'=>'required'
        ]);

        //simpan ke tabel fakultas
        Fakultas::create($input);

        //redirect ke route fakultas 
        return redirect()->route('fakultas.index')
                         ->with('success','fakultas berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}
