<?php

namespace App\Http\Controllers;

use App\Models\Gejala as GejalaModels;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'title' => 'Gejala',
            'subtitle' => 'Masukan Gejala',
            'isi' => GejalaModels::all(),
        ];
        return view('gejala.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_gejala' => 'required|string|unique:gejalas,kode_gejala',
            'nama_gejala' => 'required|string',
        ]);

        $gejala = GejalaModels::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);


        if ($gejala) {
            //redirect dengan pesan sukses
            return redirect()->route('gejala.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('gejala.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = GejalaModels::all()->find($id);

        $data = [
            'title' => 'Edit Gejala',
            'subtitle' => 'Edit Data Gejala',
            'isi' => $gejala,
        ];

        return view('gejala.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GejalaModels $gejala)
    {
        $this->validate($request, [
            'kode_gejala' => 'required|string',
            'nama_gejala' => 'required|string',
        ]);

        $gejala = GejalaModels::all()->where('id', $request->id);


        $gejala->first()->update([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);


        if ($gejala) {
            //redirect dengan pesan sukses

            return redirect()->route('gejala.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('gejala.edit')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = GejalaModels::find($id);

        $gejala->delete();

        return redirect()->route('gejala.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
