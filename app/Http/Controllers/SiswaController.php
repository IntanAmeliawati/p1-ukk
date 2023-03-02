<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Spp;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa=Siswa::all();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelas=Kelas::all();
        $spps=Spp::all();
        return view('siswa.create',compact('kelas','spps'));
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
            'nisn' => 'required|max:10',
            'nis' => 'required|max:8',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'kelas_id' => 'required',
            'spps_id' => 'required'
        ],[
            'nisn.required'     => 'Nisn Wajib Di Isi',
            'nisn.max'          => 'NISN Maksimal 10 Karakter',
            'nis.max'           => 'Nis Wajib Di Isi',
            'kelas_id.required' => 'Pilih Kelas'
        ]);

        // dd($request);

        Siswa::create([
            'nisn' => $request -> nisn,
            'nis' => $request -> nis,
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp,
            'kelas_id' => $request -> kelas_id,
            'spps_id' => $request -> spps_id
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
        $siswa = Siswa::find($siswa->id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
        $siswa = Siswa::find($siswa->id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        //
        $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'kelas_id' => 'required',
            'spps_id' => 'required'
        ]);
        $siswa = Siswa::find($siswa->id);
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_telp = $request->no_telp;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->spps_id = $request->spps_id;
        $siswa->update();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        //
        $siswa = Siswa::find($siswa->id);
        $siswa->delete();
        return redirect('/siswa');
    }
}