<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel_peminjaman_model;

class tabel_peminjamanController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mytabel_peminjaman = new tabel_peminjaman_model();
       $tabel_peminjaman = $mytabel_peminjaman->tampil_tabel_peminjaman();
        
        $data = array('tabel_peminjaman' => $tabel_peminjaman);
        return view('tabel_peminjaman/index', $data);
    }
    
    public function tambah(){
        // return ('Testing');
        return view('tabel_peminjaman/tambah');
    }
 
    public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tabel_peminjaman')
         ->insert([
             'id_katalog' => $request->id_katalog,
             'id_anggota'  =>  $request->id_anggota,
             'tanggal_peminjaman'  =>  $request->tanggal_peminjaman,
             
         ]);
         return redirect('tabel_peminjaman');
    }

    public function delete ($id_peminjaman){
        $query = \DB::table('tabel_peminjaman')->where('id_peminjaman',$id_peminjaman)->delete();
        return redirect('tabel_peminjaman');
    }


    public function edit($id_peminjaman){
        $data['tabel_peminjaman'] = tabel_peminjaman_model::where('id_peminjaman',$id_peminjaman)->first();
        return view('tabel_peminjaman/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Edit Proses');
        $query = tabel_peminjaman_model::where('id_peminjaman',$request->id_peminjaman)
        ->update([
            'id_katalog' => $request->id_katalog,
             'id_anggota'  =>  $request->id_anggota,
             'tanggal_peminjaman'  =>  $request->tanggal_peminjaman,
             
        ]);
        return redirect('tabel_peminjaman');
    
}
}