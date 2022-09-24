@extends('layouts.master')

@section('content')
<div class="ml-5 mt-5 bg-transparent">
<img src="{{asset('/images/LogoCV.jpeg')}}" width="300px" alt="">
<h2 style="margin-top: 10px;">Kwitansi</h2><hr>
<h2 style="margin-top: 0;">tanda terima</h2>

<!-- isi Kwitansi -->
<table>
    <tr>
    <td valign="top" > Telah Diterima Dari </td>
    <td valign="top" > : PT. DJarum. </td>
    </tr>

    <tr>
    <td valign="top" > Taerbilang </td>
    <td valign="top" > : Lima Ratus Dua Puluh Delapan Riu Rupiah.</td>
    </tr>

    <tr>
    <td valign="top" > Guna membayar </td>
    <td valign="top" > : Pembayaran</td>
    </tr>

    <tr>
        <td valign="top" > Banyaknya uang </td>
        <td valign="top" > : Rp. 528.000</td>
    </tr>
</table>

<!-- ttd kanan bawah -->
<div class="invoice">Sesuai Invoice  MJ210821-002</div><br>
<div>

	<div class="ttd">
		Semarang, 22 Juni 2012<br/>
        <img class="tanda" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Tanda_tangan_bapak.png/899px-Tanda_tangan_bapak.png" alt="">
        <!-- fungsi p supaya ada jarak nya saja, bisa diganti pake style -->
        <p></p>
        yang menerima
		<p class="nama">Nama : MUNCARNO.<br/>NIP. 1234</p>
	</div>
</div>

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
        width:25%;
        display:block;
        margin-right:-5px;

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

@section('js')

@stop
