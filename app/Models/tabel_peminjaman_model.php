<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_peminjaman_model  extends Model
{
    use HasFactory;
    protected $table ="tabel_peminjaman";
    protected $primaryKey ="id_peminjaman";

    public function tampil_tabel_peminjaman(){
        $query = \DB::table('tabel_peminjaman')->get();
        return $query;
    }
}
