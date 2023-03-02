<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelas=Kelas::all();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_kelas'     => 'required',
            'kompetensi_keahlian'   => 'required'
        ],[
            'nama_kelas.required'       => 'Nama Kelas Wajib Di Isi',
            'kompetensi_keahlian.max'   => 'Kompetensi Keahlian Wajib Di Isi',
        ]);

        // dd($request);
        Kelas::create([
            'nama_kelas'     => $request->nama_kelas,
            'kompetensi_keahlian'   => $request->kompetensi_keahlian,
        ]);

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
        $kelas = Kelas::find($kelas->id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
        $kelas = Kelas::find($kelas->id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
        $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required',
        ]);
        $kelas = Kelas::find($kelas->id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->kompetensi_keahlian = $request->kompetensi_keahlian;
        $kelas->update();
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
        $kelas = Kelas::find($kelas->id);
        $kelas->delete();
        return redirect('/kelas');
    }
}
