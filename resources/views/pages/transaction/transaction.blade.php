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
<tr class="order-total">
     <td>Total</td>
     <td > : </td>
  
     <td >  </td>
 </tr>
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
</tr>
</table>

</div>
  <div class="col-sm-4"></div>
</div>
<div class="row">
<div class="col-md-5"></div>
<div class="form-group col-md-2">
<div class="payment-method">
</div>
<div class="payment-accordion">
                                <div class="order-button-payment">
                                    <input type="hidden" name="_method" value="">
                                    <input value="Status Pesanan" type="submit">
                                </div>
                            </div>
                        </div>

</div>


</div>
</div>
</body>
@endsection
