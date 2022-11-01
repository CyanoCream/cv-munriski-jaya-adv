@extends('layouts.master')

@section('content')
<section class="cart-wrap p-5">
    <div class=" container bg-white p-5">
        <img class="float-right p-2" src="{{asset('/images/LogoCV.jpeg')}}" width="300px" alt="">
        <h2 class="text-left py-2" style="margin-left:0;">Kwitansi</h2>
        <hr>
        <div class="row">
            <div class="col-12">
                <h2 class="py-3">Tanda Terima</h2>

                    <!-- isi Kwitansi -->
                <table>
                    <tr>
                    <td valign="top" > Telah Diterima Dari </td>
                    <td valign="top" > : {{$perusahaan[0]->nama}} </td>
                    </tr>

                    <tr>
                    <td valign="top" > Terbilang </td>
                    <td valign="top" style="text-transform: uppercase;" > : {{Riskihajar\Terbilang\Facades\Terbilang::make($jumlah)}} Rupiah</td>
                    </tr>

                    <tr>
                    <td valign="top" > Guna membayar </td>
                    <td valign="top" > : Pembayaran SPK : {{$perusahaan[0]->nospk}},  <a> Sesuai Invoice MRJ-{{ date('dmy', strtotime($perusahaan[0]->created_at)) }}-{{$perusahaan[0]->id}}</a></td>
                    </tr>

                    <tr>
                        <td valign="top" > Banyaknya uang </td>
                        <td valign="top" > : Rp. {{$netto}}</td>
                    </tr>
                </table>

                <!-- ttd kanan bawah -->

                <div>

                <div class="ttd">
                    <p>Semarang, <span id="tanggalwaktu"></span></p><br/>
                <!-- <img class="tanda" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Tanda_tangan_bapak.png/899px-Tanda_tangan_bapak.png" alt=""> -->
                    <!-- fungsi p supaya ada jarak nya saja, bisa diganti pake style -->
                    <p></p>
                        yang menerima
                        <p class="nama">Nama : MUNCARNO.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    a {
        text-decoration: none;
        color: #0903E8;
        font-family: verdana;
    }

    a:hover {
        color: #FA3C3C;
    }

    .ttd{
        float:right;
        width:25%;
        min-height:40px;
        display:block;
        margin-right:-5px;
    }
    .invoice{
        float:right;
        /* width:25%; */
        display:block;
        margin-right:46px;

    }

    .logo{
        width:150px;
        display:block;
    }

    .ttd .nama{
        margin-top: 100px;
    }

    .tanda{
        float:right;
        position: absolute;
        width:200px;
        /* min-height:40px;  */
        display:block;
        /* margin-right:-5px; */
        margin-bottom: 30px;
    }
 </style>
 </div>
@stop

@section('css')

@stop

@section('addJavascript')

<script>
 window.print();
 </script>
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = +" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>

@stop
