@extends('template')
 
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Keranjang Kelongan.id</title>
  <style type="text/css">
    .produk img{
      border-radius: 25pt;
      float: left;
    }
    .produk{
      padding: 25px;
    }
    .price{
      margin-top: 10px;
    }
    .price p:nth-child(1){
      float: left;
    }
    .price p:nth-child(2){
      float: left;
      color: tomato;
      font-weight: bold;
      font-size: 18px;
      margin-left: 550px;
    }
    .detail-produk{
      float: left;
      padding: 0 0 40px 25px; 
    }
    .detail-produk h2{
      text-decoration: underline;
    }
    .detail-produk h3{
      font-size: 20px;
    }
    .cart-sum{
      background-color: #dedede;
      padding: 25px;
      margin-bottom: 75px;
    }
    .cart-sum h1{
      color: #005d68;
      text-align: center;
      letter-spacing: 1px;
      padding-bottom: 5px;
    }
    .cart-sum p{
      font-size: 18px;
    }
    .cart-sum span{
      float: right;
      font-size: 24px;
      font-weight: bold;
      color: tomato;
      margin-top: -90px;
    }
    .cart-sum button{
      background-color: rgba(84, 84, 84, 1);
      color: white;
      border: none;
      padding: 5pt 10px;
      font-size: 20px;
      letter-spacing: 1.2px;
      float: right;
      margin-top: 5px;
      transition: 0.5s;
    }
    .cart-sum button:hover{
      background-color: rgba(84,84,84,0.8);
    }
    .cf{
      clear: both;
    }
  </style>
</head>
<br>
<br>
  <div class="container">
    @if (session('alert_pesan'))
      <div class="alert alert-success">
          {{ session('alert_pesan') }}
      </div>
    @endif
    <br>
    <h1>Keranjang</h1><hr>
    <form action="{{ url('transaksi_store') }}" method="post">

    <div class="cart-container">
      @foreach($data as $dt)
      <div class="produk">
        <img src="/Uploads/{{$dt->picture}}">
        <div class="detail-produk">
          <h2>{{ $dt->nama_items}}</h2><br>
          <h3><span style="font-weight: normal;">dari</span> {{ $dt->nama_merchant}}</h3><br>
          <label>QTY:</label> 
          <!-- <select>
            <option>{{ $dt->stock}}</option>
          </select> -->
          <a href="#">-</a>
          <input type="number" value="{{$dt->qty}}" min="1" max="{{$dt->stock}}" readonly>
          <a href="#">+</a>
          <div class="price">
            <p>Rp. {{ $dt->price}}</p>
            <p>Rp. {{ $dt->price * $dt->qty}}</p>
          </div>
        </div><hr class="cf">
      </div>
      @endforeach
    </div>

    <div class="cart-sum cf">
      <h1>CART SUMMARY</h1><hr>
      <p>Grand Total:</p>
      <p>({{ $data->count()}} Produk)</p>
      <span>Rp. 130000</span><br>
      <button type="submit">CHECKOUT</button>
    </div>
        
    </form>
  </div>

@stop