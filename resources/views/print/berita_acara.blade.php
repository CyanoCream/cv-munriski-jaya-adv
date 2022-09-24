@extends('layouts.master')

@section('content')

   
    <!-- <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div class="stl">
    <header>
  <div>
      <div style="margin-bottom:40px;">
        <strong style=" text-decoration: underline; margin-left: 260px; "><b>BERITA ACARA SERAH TERIMA PEKERJAAN</b> </strong>
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

        <p>1. Nama : teki Sugiarto</p> <div class="clearfix" id="company" style="padding-left: 450px;"> <strong> PT Djarum </strong></div>
        <div>Bertindak untuk dan atas nama :</div>
        <div>Yang Selanjutnya disebut dengan <b style=" text-decoration: underline;">PIHAK KEDUA</b></div>
        <p>2. Nama : Muncarno</p>
        <div>   Alamat : Jimbaran. 05/08 Gondoriyo, Bergas. Kab Semarang, 50552</div>
        <div style="padding-top:20px;">Bertindak untuk dan atas nama <b>CV.Munrizky Jaya</b></div>
        <div>Yang Selanjutnya disebut dengan <b style=" text-decoration: underline;">PIHAK KEDUA</b></div>

      </div>
    </header>
    <main>
      <div style="padding-bottom:10px;">   Dengan ini setuju sepakat untuk melakukan Penyerahan pekerjaan dengan speksifikasi sebagai berikut:</div>
      <table>
        <thead>
          <tr>
            <th class="service">NO</th>
            <th class="desc">MERK</th>
            <th>Description</th>
            <th>Total QTY</th>
            <th>Price</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td class="service">Design</td>
            <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">26</td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td>1</td>
            <td class="service">Design</td>
            <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">26</td>
            <td class="total">$1,040.00</td>
          </tr>
          <!-- <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr> -->
          <tr>
            <td></td>
            <td colspan="4" class="grand total">Total Spk Bruto <br>
              Nilai Dpp <br>
              Total SPK Netto </td>
            <td class="grand total">$5,200.00<br>
              $1,300.00 <br>
              $6,500.00</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <p style="margin-left:150px;margin-right:450px;border-style: double;"><b>No.SPK :SPK-21/9/4SLT/032</b> </p>
        <div>pekerjaan tersebut kepada <b>Pihak Pertama. </b>dan <b>Pihak Kedua</b> telah menerima hasil pekerjaan tersebut.
        <p>sesuai dengan</p></div>
        <div >Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</div>
      </div>
    </main>

    <div style="margin-top: 10px; display:flex; justify-content: space-between; flex-direction: row;">
      <span><p> Customer </p> <p><b>PT Djarum</b></p><p style="padding-top:50px;">(             )</p></span>
      <span><p>Muncarno</p><p>CV Munrizky Jaya</p><p style="padding-top:50px;">PT Djarum</p></span>
    </div>
    </div>
  
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
  padding: 5px 20px;
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


