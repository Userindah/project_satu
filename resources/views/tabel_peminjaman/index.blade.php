@extends('layout1.main2')
@section('content')

<h4><b>Data Peminjaman</b></h4>
<br>
<a href="{{ asset('tabel_peminjaman/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID_Peminjaman</td>
    <td><b>Id Katalog</td>
    <td><b>Id Anggota</td>
    <td><b>Tanggal Peminjaman</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($tabel_peminjaman as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_peminjaman }}</td>
    <td>{{ $rows->id_katalog }}</td>
    <td>{{ $rows->id_anggota }}</td>
    <td>{{ $rows->tanggal_peminjaman }}</td>
    <td>
        <a href="{{ asset('tabel_peminjaman/edit/'.$rows->id_peminjaman ) }}">Edit</a>
        <a href="{{ asset('tabel_peminjaman/delete/'.$rows->id_peminjaman ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection