@extends('layout1.main2')
@section('content')


<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{ asset('tabel_peminjaman/edit_proses') }}" method="POST">
@csrf

<input type="hidden" name="id_peminjaman" value="{{$tabel_peminjaman->id_peminjaman}}">
<div class="mb-3 row">
    <label for="id_katalog" class="col-sm-2 col-form-label">Id Katalog</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_katalog" value="{{$tabel_peminjaman->id_katalog}}" name="id_katalog">
    </div>
</div>

<div class="mb-3 row">
    <label for="id_anggota class="col-sm-2 col-form-label">Id Anggota</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_anggota" value="{{$tabel_peminjaman->id_anggota}}" name="id_anggota">
    </div>
</div>

<div class="mb-3 row">
    <label for="tanggal_peminjaman class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_peminjaman" value="{{$tabel_peminjaman->tanggal_peminjaman}}" name="tanggal_peminjaman">
    </div>
</div>
<input type="submit" value="Simpan">
</form>

@endsection