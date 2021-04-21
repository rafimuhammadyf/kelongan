@extends('template')
 
@section('content') 
<!DOCTYPE html>
<html>
  <head>
  <title>Transaksi Kelongan.id</title>
</head>
<body>
<br>
<br>

    <div class="container">
    @if(session('alert_pesan'))
      <div class="alert alert-success">
          {{ session('alert_pesan') }}
      </div>
    @endif
    <br>
    <h1>Transaksi</h1><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="clear: both;">
            <thead>
              <tr>
                <th>ID Transaksi</th>
                <th>ID Item</th>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Total Harga</th>
                <th>ID Merchant</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- @php $no = 1; @endphp -->
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id}}</td>
                <td>{{ $dt->id_items}}</td>
                <td>{{ $dt->nama_items}}</td>
                <td>{{ $dt->qty}}</td>
                <td>{{ $dt->total_price}}</td>
                <td>{{ $dt->id_merchant}}</td>
                <td>
                  <form action="{{ url('transaksi_destroy', $dt->id )}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('transaksi_edit', $dt->id )}}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>
@stop