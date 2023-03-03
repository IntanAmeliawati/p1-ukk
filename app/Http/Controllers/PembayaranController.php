<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\siswa;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Siswa $siswa, Spp $spp)
    {
        //
        $siswas = Siswa::find($siswa->id);
        $users = User::all();
        $spps = Spp::all();
        return view('Pembayaran.index', compact('siswas','spps', 'pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Siswa $siswa, Spp $spp)
    {
        //
        $siswas = Siswa::find($siswa->id);
        $users = User::all();
        $spps = Spp::all();
        return view('Pembayaran.create', compact('siswas','spps'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Siswa $siswa)
    {
        //
        // dd($request);
        $request->validate([
            'tgl_bayar' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'jumlah_dibayar' => 'required'
        ]);
        Pembayaran::create([
            'users_id'  => Auth::user()->id,
            'siswas_id' =>  $siswa->id,
            'spps_id'   =>  $siswa->spps_id,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'jumlah_bayar'=> $request->jumlah_bayar,
        ]);
        return redirect()->route('siswa.show',$siswa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }
}