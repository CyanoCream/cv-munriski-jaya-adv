<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Perintah_kerja;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");

        //ambil jam dan menit
        $jam = date('H:i');
        $perusahaan = Perusahaan::where('status_pembayaran', 'lunas')->get();
        $perintah = Perintah_kerja::all();
        // dd($perusahaan);
        // dd($jam);
        return view('home', compact('perintah','perusahaan', 'jam'));
    }
}
