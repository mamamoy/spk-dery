<?php

namespace App\Http\Controllers;

use App\Models\Penyakit as ModelsPenyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Penyakit',
            'subtitle' => 'Masukan Penyakit',
            'isi' => ModelsPenyakit::all(),
        ];
        return view('penyakit.index', $data);
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
            'kode' => 'required|string|unique:penyakits,kode',
            'nama_penyakit' => 'required|string',
            'definisi' => 'required|string',
            'solusi' => 'required|string',
        ]);

        $penyakit = ModelsPenyakit::create([
            'kode' => $request->kode,
            'nama_penyakit' => $request->nama_penyakit,
            'definisi' => $request->definisi,
            'solusi' => $request->solusi,

        ]);

        if ($penyakit) {
            //redirect dengan pesan sukses
            return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('penyakit.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsPenyakit $id)
    {
        return view('penyakit.edit', [
            "title" => "Edit Penyakit",
            "subtitle" => "Ubah Data Penyakit",
            "penyakit" => ModelsPenyakit::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $penyakit = ModelsPenyakit::all()->find($id);

        $data = [
            'title' => 'Edit Penyakit',
            'subtitle' => 'Edit Data Penyakit',
            'isi' => $penyakit,
        ];

        return view('penyakit.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsPenyakit $penyakit)
    {
        $this->validate($request, [
            'kode' => 'required|string',
            'nama_penyakit' => 'required|string',
            'definisi' => 'required|string',
            'solusi' => 'required|string',
        ]);

        $penyakit = ModelsPenyakit::all()->where('id', $request->id);


        $penyakit->first()->update([
            'kode' => $request->kode,
            'nama_penyakit' => $request->nama_penyakit,
            'definisi' => $request->definisi,
            'solusi' => $request->solusi,
        ]);


        if ($penyakit) {
            //redirect dengan pesan sukses

            return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('penyakit.edit')->with(['error' => 'Data Gagal Disimpan!']);
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
        $penyakit = ModelsPenyakit::find($id);

        $penyakit->delete();

        return redirect()->route('index-penyakit')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
