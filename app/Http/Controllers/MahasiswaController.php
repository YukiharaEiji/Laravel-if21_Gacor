<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nama' -> 'required',
            'npm' -> 'required|unique:mahasiswa',
            'Tempat_Lahir' -> 'required',
            'Tanggal_Lahir' -> 'required|date',
            'jk' -> 'required',
            'asal_SMA' -> 'required',
            'foto' -> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'prodi_id' -> 'required|exists:prodi,id',
        ]);

        if($request->hasFile('foto')){
           $file - request->file
            


        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
          $prodi = Prodi::all();
        return view('mahasiswa.create',
        compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
