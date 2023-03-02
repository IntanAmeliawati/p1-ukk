<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('petugas.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('petugas.create');
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
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required'
        ]);
        User::create([
            'username' => ($data['username']),
            'password'  => bcrypt($data['password']),
            'nama_petugas'  => ($data['nama_petugas']),
            'level' => ($data['level']),
        ]);
        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $users = User::find($user->id);
        return view('petugas.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $users = User::find($user->id);
        return view('petugas.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required'
        ]);

        $users = User::find($user->id);
        $users->username = $request->username;
        $users->password = $request->password;
        $users->nama_petugas = $request->nama_petugas;
        $users->level = $request->level;
        $users->update();
        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $users = User::find($user->id);
        $users->delete();
        return redirect()->route('petugas.index');
    }
}