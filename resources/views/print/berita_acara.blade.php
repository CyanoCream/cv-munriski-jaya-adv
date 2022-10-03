@extends('layouts.master')

@section('content')

   
    <!-- <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<section class="cart-wrap p-5 ">   
  <div class="container bg-white p-5">
    <header>
      <div class="row">
        <div class="col-12">
          <div class=" text-center text-decoration-none" style="margin-bottom:40px;">
            <strong><b>BERITA ACARA SERAH TERIMA PEKERJAAN</b> </strong>
          </div>
                  <!-- <div id="company" class="clearfix">
                    <div><b>CV. MAKMUR 100</b></div>
                    <div>455 Foggy Heights,<br /> AZ 85004, US</div>
                    <div>(602) 519-0450</div>
                    <div><a href="mailto:company@example.com">company@example.com</a></div>
                  </div> -->
            <div id="project">
              <div>Yang Bertanda tangan dibawah ini:</div>
                <p>Hari/Tgl: <strong id="tanggalwaktu"></strong></p><br>
                <p>1. Nama : {{$perusahaan[0]->pemberi_kerja}}</p> <div class="clearfix" id="company" style="padding-left: 250px;"> <strong> {{$perusahaan[0]->nama}} </strong></div>
                  <div>Bertindak untuk dan atas nama :</div>
                    <div>Yang Selanjutnya disebut dengan <b style=" text-decoration: underline;">PIHAK KEDUA</b></div>
                        <p>2. Nama : Muncarno</p>
                        <div>   Alamat : Jimbaran. 05/08 Gondoriyo, Bergas. Kab Semarang, 50552</div>
                          <div style="padding-top:20px;">Bertindak untuk dan atas nama <b>CV.Munrizky Jaya</b></div>
                            <div>Yang Selanjutnya disebut dengan <b style=" text-decoration: underline;">PIHAK KEDUA</b></div>
                                <div style="padding-bottom:30px;">   Dengan ini setuju sepakat untuk melakukan Penyerahan pekerjaan dengan speksifikasi sebagai berikut:</div>
      </div>
      </div>
    </header>
    <main>
      
      <table class="table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>MERK</th>
            <th>Description</th> 
            <th>Total QTY</th>
            <th>Price</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($perintah_kerja as $p) 
        <tr>
            <td>{{++$i}}</td>
            <td class="">{{$p->merk}}</td>
            <td class="">{{$p->deskripsi}}</td>
            <td class="">Rp.{{$p->harga_unit}}</td>
            <td class="">{{$p->kuantitas}}</td>
            <td class="">{{$p->total}}</td>
          </tr>
          @endforeach
          
          <tr>
            <td></td>
            <td colspan="4" class="grand total">Total Spk Bruto <br>
              Nilai DPP <br>
              PPN 10% <br>
              Total SPK Netto </td>
            <td class="grand total">Rp.{{$jumlah}}<br>
              Rp.{{$jumlah}} <br>
              Rp.{{$ppn}}<br>
              Rp.{{$netto}}</td>
          </tr>
          
        </tbody>
      </table>
      <div id="notices">
        <p style="margin-right:450px;border-style: double;"><b>No.SPK :{{$perusahaan[0]->nospk}}</b> </p>
        <div>pekerjaan tersebut kepada <b>Pihak Pertama. </b>dan <b>Pihak Kedua</b> telah menerima hasil pekerjaan tersebut.
        <p>sesuai dengan</p></div>
        <div >Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</div>
      </div>
    </main>
  <br>
    <div style="margin-top: 10px; display:flex; justify-content: space-between; flex-direction: row;">
      <span>PIHAK PERTAMA <p><b>{{$perusahaan[0]->nama}}</b></p><p style="padding-top:50px;">({{$perusahaan[0]->pemberi_kerja}})</p></span>
      <span>PIHAK KEDUA<p>CV Munrizky Jaya</p><p style="padding-top:50px;">MUNCARNO</p></span>
    </div>
    </div>
</section> 
    @stop

    @section('addCss')
    <link rel="stylesheet" href="style.css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

.stl {
  position: relative;
  width: 21cm;
  height: 29.7cm;
  margin: 0 auto;
  color: #001028;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 12px;
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 89px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

/* footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
} */
    </style>

    @stop

@section('addJavascript')

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


