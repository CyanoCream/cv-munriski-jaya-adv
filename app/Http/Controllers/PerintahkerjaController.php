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
    public function index($id)
    {
        $perintah_kerja = Perintah_kerja::all();
        $perusahaan = Perusahaan::find($id);
        // dd($perusahaan);
        // dd($perintah_kerja);

        return view('perintah_kerja.index', compact('perintah_kerja', 'perusahaan'));
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
