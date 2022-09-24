<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Perintah_kerja;
use App\models\Perusahaan;
use PDF;
class CetakController extends Controller
{
    public function index()
    {
    	$pegawai = Perintah_kerja::all();
    	return view('pegawai',['pegawai'=>$pegawai]);
    }
 
    public function cetak_pdf()
    {
    	$pegawai = Perintah_kerja::all();
 
    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
}
