<?php

namespace App\Http\Controllers;
use App\models\Perintah_kerja;
use App\models\Perusahaan;
use Illuminate\Http\Request;

class PerintahkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perintah_kerja = Perintah_kerja::with('perusahaan')->get();
        // $perusahaan = Perusahaan::find();
        // dd($perusahaan);
        // dd($perintah_kerja);

        return view('perintah_kerja.index', compact('perintah_kerja'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $perusahaan = Perusahaan::all();
        $perintah = new Perintah_kerja;
        $perintah->perusahaan_id = '1';
        $perintah->deskripsi = $request->deskripsi;
        $perintah->kuantitas = $request->kuantitas;
        $perintah->harga_unit = $request->harga_unit;
        $perintah->merek = $request->merek;
        $perintah->jenis = $request->jenis;
        $perintah->total = $request->kuantitas * $request->harga_unit;
        $perintah->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $perusahaan = new Perusahaan();
        $perusahaan->perusahaan_id= $request->perusahaan_id;
        $perusahaan->lampiran= 'ghhcgch';
        $perusahaan->nospk= $request->nospk;
        $perusahaan->nama= $request->nama;
        $perusahaan->save();
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
        $pk = Perintah_kerja::find($id);
        $pk->total = $request->kuantitas * $request->harga_unit;
        $pk->update($request->all());
        $pk->save();

        return redirect()->back();
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
