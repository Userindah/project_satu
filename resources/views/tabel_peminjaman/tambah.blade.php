@extends('layout1.main2')
@section('content')


<h4><b>Tambah Peminjaman</b></h4>
<br>
<form action="{{ asset('tabel_peminjaman/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="id_katalog" class="col-sm-2 col-form-label">Id Katalog</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_katalog" name="id_katalog">
    </div>
</div>
<div class="mb-3 row">
    <label for="id_anggota" class="col-sm-2 col-form-label">Id Anggota</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="id_anggota" name="id_anggota">
    </div>
</div>

<div class="mb-3 row">
    <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection