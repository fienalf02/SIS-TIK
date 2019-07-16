<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        // return view('guru.index', compact('gurus'));
        return $guru;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'NIP' => 'required|min:5',
        //     'nama' => 'required',
        //     'JK' => 'required',
        //     'password' => 'required',
        // ]);
        // Guru::create($request->all());
        // return redirect()->route('guru.index');

        $guru = new Guru;
        $guru->NIP = $request->NIP;
        $guru->nama = $request->nama;
        $guru->JK = $request->JK;
        $guru->password = $request->password;
        $guru->save();

        return "Data berhasil dimasukkan";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $guru = Guru::findOrFail($id);
        // return view('guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'NIP' => 'required|min:5',
        //     'nama' => 'required',
        //     'JK' => 'required',
        //     'password' => 'required',
        // ]);

        // $guru = Guru::findOrFail($id);
        // $guru->update($request->all());
        // return redirect()->route('guru.index');

        $NIP = $request->NIP;
        $nama = $request->nama;
        $JK = $request->JK;
        $password = $request->password;

        $guru = Siswa::find($id);
        $guru->NIP = $NIP;
        $guru->nama = $nama;
        $guru->JK = $JK;
        $guru->password = $password;
        $guru->save();

        return "Data berhasil diupdate";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $guru = Guru::findOrFail($id);
        // $guru->delete();
        // return redirect()->route('guru.index');

        $guru = Guru::find($id);
        $guru->delete();
        return "Data berhasil dihapus";
    }
}
