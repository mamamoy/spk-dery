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
        return view('admin.penyakit', $data);
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
            return redirect()->route('index-penyakit')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('create-penyakit')->with(['error' => 'Data Gagal Disimpan!']);
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
        //
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
        //
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

        return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
