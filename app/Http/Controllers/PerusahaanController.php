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
        $perusahaan->lampiran= 'ghhcgch';
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
    public function show($id)
    {

        $perusahaan = Perusahaan::find($id);
        // $spk = perintah_kerja::with('Perusahaan')
        //     ->find($perusahaan_id = $id);

        // $spk = Perintah_kerja::all();

        // $spk = DB::table('perintah_kerja')
        //     ->with('perusahaan_id', '=', $id)
        //     ->get();
        // $spk = perintah_kerja::with('perusahaan', 'perintah_kerja.perusahaan_id', '=', 'perusahaan.id')->get();
// dd($spk);
        return view('perintah_kerja.index', compact('perusahaan'/* , 'spk' */) );
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
