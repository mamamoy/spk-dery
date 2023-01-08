<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Relasi;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Hasil Diagnosa';
        $konsul = Konsultasi::get()->first();
        $penyakit = Penyakit::where('id', $konsul->penyakit_id)->get()->first();
        $relasi = Relasi::where('penyakit_id', $konsul->penyakit_id)->get();

        foreach ($relasi as $r) {
            $hasil[] = [
                'id' => $r->gejala_id,
                $query = Gejala::with('Relasi')->where('id', $r->gejala_id)->first(),
                'nama' => $query->nama_gejala,
            ];
        }
        
        $data = [
            'title' => $title,
            'nama' => Auth::user()->username,
            'usia' => Auth::user()->usia,
            'jenisKelamin' => Auth::user()->jeniskelamin,
            'penyakit' => $penyakit->nama_penyakit,
            'gejala' => $hasil,
        ];
        // dd($data);
        return view('konsultasi.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Konsultasi';

        $data = [
            'title' => $title,
            'title1' =>'Input',
            'subtitle' => 'Jawablah Pertanyaan Ini!',
            'pertanyaan' => Gejala::get(),
        ];
        return view('konsultasi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->G007 == 1){
            $this->validate($request, [
                'G007' => 'required',
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 1,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G034 == 1){
            $this->validate($request, [
                'G034' => 'required',
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 6,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G049 == 1){
            $this->validate($request, [
                'G049' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 10,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G016 == 1){
            $this->validate($request, [
                'G016' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 2,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G027 == 1){
            $this->validate($request, [
                'G027' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 5,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G020 == 1){
            $this->validate($request, [
                'G020' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 3,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G023 == 1){
            $this->validate($request, [
                'G023' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 4,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G043 == 1){
            $this->validate($request, [
                'G043' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 8,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G047 == 1){
            $this->validate($request, [
                'G047' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 9,
                'user_id' => Auth::id(),
            ]);
        } elseif($request->G040 == 1){
            $this->validate($request, [
                'G040' => 'required'
            ]);
            $konsul = Konsultasi::create([
                'penyakit_id' => 7,
                'user_id' => Auth::id(),
            ]);
        }

        if ($konsul) {
            //redirect dengan pesan sukses
            return redirect()->route('konsultasi.hasil')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('konsultasi.index')->with(['error' => 'Data Gagal Disimpan!']);
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
}
