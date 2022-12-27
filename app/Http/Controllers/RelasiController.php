<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Relasi;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_penyakit = Penyakit::all();
        $nama_gejala = Gejala::all();

        $data = [
            'title' => 'Relasi',
            'subtitle' => 'Relasi Penyakit Dan Gejala',
            'penyakit' => $nama_penyakit,
            'gejala' => $nama_gejala,
        ];
        return view('relasi.hasil', $data);
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
            'relasi_penyakit' => 'required',
            'relasi_gejala' => 'required',
        ]);

        // dd($request);
        $countGejala = count($request->relasi_gejala);

        for ($i = 0; $i < $countGejala; $i++) {
            $relasi = new Relasi();
            $relasi->id_gejala = $request->relasi_gejala[$i];
            $relasi->id_penyakit = $request->relasi_penyakit;
            $relasi->save();
        }

        // $relasi = Relasi::create([
        //     'id_gejala' => $request->relasi_gejala,
        //     'id_penyakit' => $request->relasi_penyakit,
        // ]);


        if ($relasi) {
            //redirect dengan pesan sukses
            return redirect()->route('relasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('relasi.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        //
    }

    public function ajaxRequestPost(Request $request)
    {
        $relasi_penyakit = $request->relasi_penyakit;

        $relasi = Penyakit::with('relasiPenyakit')->find($relasi_penyakit);

        // dd($relasi);
        $listRelasi = '';

        if ($relasi) {
            foreach ($relasi->relasiPenyakit as $rp) {
                // dd($rp);
                $listRelasi =  $listRelasi . '<li>' . $rp->dataGejala->nama_gejala . '</li>';
            }
        }
        dd($listRelasi);
        return $listRelasi;
    }
}
