@extends('layouts.app')

@section('content')
<head>
<meta charset="utf-8">
<title>Status Pembayaran</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center" > Detail Pembayaran</h2><br />
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
      <table width="500px" align="center" class ="table" >
    <tr>
    <td>Kode Transaksi</td>
        <td>:</td>
        <td>005142</td>
<tr>
<td>Nama Barang</td>
        <td>:</td>
        <td>Speaker JMMI<div class="row">
  <div class="row-sm-4"></div>
  <div class="row-sm-4"></div></td>
        
</tr>
<tr>
    <td>Harga</td>
        <td>:</td>
        <td>Rp. 40.000,-</td>
</tr>
<tr>
<td>Pembayaran melalui </td>
        <td > : </td>
      <td>  <div class="form-group">

<div class="col-md-20">
<form action="{{url('/save')}}" method="POST">
@csrf
<select class="form-control" name="pembayaran" required="required">
        <option value="Transfer">Transfer</option>
        <option value="OVO">OVO</option>
        <option value="Dana">Dana</option>
    </select>
</div>
</div>  </td>
</table>

</div>
  <div class="col-sm-4"></div>
</div>
<div class="row">
<div class="col-md-5"></div>
<div class="form-group col-md-4">
<button type="submit"  class="btn btn-success" style="margin-left:38px">Lanjutkan</button>
</div>
</div>


</div>
</div>
</body>
@endsection
