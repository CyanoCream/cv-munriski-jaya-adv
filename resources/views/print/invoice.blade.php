@extends('layouts.master')

@section('content')

  <div class="stl p-5">
    <header class="clearfix">
      <div id="company" class="clearfix">
        <div><b>CV Munrizky Jaya</b></div>
        <div>4jimbaran 05/08 Gondoriyo,<br /> Bergas <br>Kab. Semarang 50552</div>
        <div>085 848 847 591</div>
        <div><a href="mailto:Munrizky_jaya@gmail.com">Munrizky_jaya@gmail.com</a></div>
      </div>
      <div id="project">
        <div>MRJ-{{ date('dmy', strtotime($perusahaan[0]->created_at)) }}-{{$perusahaan[0]->id}} </div><br>

        <div><b>{{$perusahaan[0]->nama}} </b></div>
        <div>{{$perusahaan[0]->alamat}} , {{$perusahaan[0]->provinsi}} ,</div>
        <div>{{$perusahaan[0]->kodepos}} </div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">NO</th>
            <th class="desc">MERK</th>
            <th>Description</th>
            <th>Total QTY</th>
            <th>Dalam Bentuk</th>
            <th>Price</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($perintah_kerja as $p)
          <tr>
            <td>1</td>
            <td class="service">{{$p->merek}}</td>
            <td class="desc">{{$p->deskripsi}}</td>
            <td class="unit">Rp.{{$p->harga_unit}}</td>
            <td class="qty">{{$p->kuantitas}}</td>
            <td class="qty">{{$p->jenis}}</td>
            <td class="total">Rp.{{$p->harga_unit * $p->kuantitas}}</td>
          </tr>
          @endforeach
          <tr>
            <td></td>
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
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>


    <div style="margin-top: 10px; display:flex; justify-content: space-between; flex-direction: row;">
      <span style="margin-left:10px;">Customer</span>
      <span style="margin-right:10px;">Muncarno</span>
    </div>
    </div>
@stop
@section('addJavascript')
<script>
 window.print();
 </script>
@stop
@section('addCss')
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
  width: 52px;
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

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
 </style>
@stop
