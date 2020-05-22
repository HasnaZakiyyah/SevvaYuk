@extends('layouts.app')

@section('content')
<title>Status Pembayaran</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center" >Status Pembayaran</h2><br />
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-3">
      <table width="1000px" align="center" class ="table" >
    <tr>
    <td>Kode Transaksi</td>
        <td>:</td>
        <td>005142</td>
<tr>
<td>Nomor Pembayaran</td>
        <td>:</td>
        <td>002201480433200093</td>
        <td>Bank BRI</td>    
        <div class="row">
  <div class="row-sm-4"></div>
  <div class="row-sm-4"></div></td>
        
</tr>
<tr>
    <td>Batas Waktu Pembayaran</td>
        <td>:</td>
        <td></td>
</tr>
<tr>
    <td>Status Pembayaran</td>
        <td>:</td>
        <td>Belum Terbayar</td>
</tr>
</table>
</div>
  <div class="col-sm-4"></div>
  <table align="center">
</div>
<tr>
    <td> <div>
<a href="{{action('TransactionController@transaction') }}"
class="btn btn-outline-dark">Kembali</a>
</div>
</td>
<td></td>
<td>
<div>
<a href="{{action('UploadController@upload') }}"
class="btn btn-outline-dark">Upload Bukti Pembayaran</a>
</div>
</td>
</tr>
</table>

</div>
</div>
</body>
@endsection
