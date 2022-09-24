<?php

namespace App\Http\Controllers;

use App\models\Perusahaan;
use App\models\Perintah_kerja;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan= Perusahaan::all();
        // dd($perusahaan);
        // dump($perusahaan);

        return view ('perusahaan.index', compact('perusahaan'));

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
        // dd($request);
        $perusahaan = new Perusahaan();
        $perusahaan->invoice= $request->invoice;
        $perusahaan->nospk= $request->nospk;
        $perusahaan->nama= $request->nama;
        $perusahaan->alamat= $request->alamat;
        $perusahaan->tanggal= $request->tanggal;
        $perusahaan->provinsi= $request->provinsi;
        $perusahaan->kota= $request->kota;
        $perusahaan->kodepos= $request->kodepos;
        $perusahaan->npwp= $request->npwp;
        $perusahaan->pemberi_kerja= $request->pemberi_kerja;
        $perusahaan->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $perusahaan = Perusahaan :: all();
        $perintah_kerja = Perintah_kerja::with('perusahaan')->get();
        // $perusahaan = Perusahaan::find();
        // dd($perusahaan);
        // dd($perintah_kerja);

        return view('perintah_kerja.pesan', compact('perintah_kerja'));

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
        // dd($request);
        $perusahaan = Perusahaan::find($id);
        $perusahaan->invoice= $request->invoice;
        $perusahaan->lampiran= 'ghhcgch';
        $perusahaan->nospk= $request->nospk;
        $perusahaan->nama= $request->nama;
        $perusahaan->alamat= $request->alamat;
        $perusahaan->tanggal= $request->tanggal;
        $perusahaan->provinsi= $request->provinsi;
        $perusahaan->kota= $request->kota;
        $perusahaan->kecamatan= $request->kecamatan;
        $perusahaan->kodepos= $request->kodepos;
        $perusahaan->npwp= $request->npwp;
        $perusahaan->pemberi_kerja= $request->pemberi_kerja;
        $perusahaan->metode_pembayaran= $request->metode_pembayaran;
        $perusahaan->norek= $request->norek;
        $perusahaan->save();

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
        $perusahaan = Perusahaan::find($id)->delete();
        return redirect()->back();
    }
    public function store_spk(Request $request)
    {
        // dd($request);
        $harga_unit = $request->harga_unit;
        $kuantitas = $request->kuantitas;
        $total = $harga_unit * $kuantitas;
        // dd($gross);
        $perusahaan = new Perusahaan();
        $spk = new Perintah_kerja();
        // $spk->perusahaan_id = $request->perusahaan->id;
        $spk->deskripsi= $request->deskripsi;
        $spk->kuantitas= $request->kuantitas;
        $spk->harga_unit= $request->harga_unit;
        $spk->total = $total;
        // dd($spk);
        $spk->save();

        return redirect()->back();
    }
}
