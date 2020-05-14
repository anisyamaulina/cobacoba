<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;
use App\Ruang;
use App\Barang;
use Redirect;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function add()
    {
        $peminjaman = Peminjaman::all();

        $barang = Barang::all();
        return view('addpeminjaman', compact('peminjaman', 'barang'));
    }

    public function save(Request $request){
        $table= new Peminjaman();
        $table->acara = $request->input('acara');
        $table->ruang = $request->input('ruang');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');

        $table= new Barang();
        $table->nama_barang = $request->input('nama_barang');
        $table->jumlah_barang = $request->input('jumlah_barang');
        $table->jumlah_pinjam = $request->input('jumlah_pinjam');
        $table->jumlah_request = $request->input('jumlah_request');
        $table->sisa_barang = $request->input('sisa_barang');
        $table->save();
        return Redirect::back();
    }

    public function index()
    {
        $peminjaman = Peminjaman::all();

        $barang = Barang::all();
        return view('datapeminjaman', ['peminjaman' => $peminjaman, 'barang' => $barang]);
    }

    public function edit($id)
    {
	// mengambil data peminjaman berdasarkan id yang dipilih
    $peminjaman = DB::table('peminjaman')->where('id',$id)->get();
    
    $barang = DB::table('barang')->where('id',$id)->get();
	// passing data peminjaman yang didapat ke view editprofil.blade.php
	return view('editpeminjaman',['peminjaman' => $peminjaman, 'barang' => $barang]);
 
    }

    public function update(Request $request)
    {
	// update data peminjaman
	DB::table('peminjaman', 'barang')->where('id',$request->id)->update([
		'acara' => $request->acara,
        'ruang' => $request->ruang,
        'nama_barang' => $request->nama_barang,
        'sisa_barang' => $request->sisa_barang,
        'jumlah_pinjam' => $request->jumlah_pinjam,
        'jumlah_request' => $request->jumlah_request,
        'tanggal' => $request->tanggal,
        'waktu_mulai' => $request->waktu_mulai,
        'waktu_selesai' => $request->waktu_selesai
		
    ]);
	// alihkan halaman ke halaman datapeminjaman
	return redirect('/datapeminjaman');
    }

    public function submit_peminjaman(Request $request){
        $table= new Peminjaman();
        $table->acara = $request->input('acara');
        $table->ruang = $request->input('ruang');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');
        $table->save();

        DB::table('barang')->where('id',$request->input('id'))->update([
        
            'jumlah_pinjam' => $request->input('jumlah_barang'),
            'jumlah_request' => $request->input('jumlah_request')
            
        ]);

        dd($request->input());
    }


    public function delete($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->back();
    }

    public function getRuang()
    {
        $ruang = Ruang::all();
        return view('addpeminjaman', ['ruang' => $ruang]);
    }

    public function getBarang()
    {
        $barang = Barang::all();
        return view('addpeminjaman', ['barang' => $barang]);
    }
   

}
