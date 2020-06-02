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
        dd($request->input());
        $table= new Peminjaman();
        $table->acara = $request->input('acara');
        $table->ruang = $request->input('ruang');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');
        $table->save();

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
        dd($request->input());
        $table= new Peminjaman();
        $table->acara = $request->input('acara');
        $table->ruang = $request->input('ruang');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');
        $table->save();

        for($i=0;$i<sizeof(Barang::get());$i++){
            
            //Get Sisa barang
            $sisa_barang = Barang::get()->where('id',$request->input('id_barang_'.$i)[0]['sisa_barang']);
            echo "sisa barang : ".$sisa_barang."<br>";
            // $int_sisa_barang = (int)$sisa_barang;
            
            // Get Jumlah yang dipinjam
            $jumlah_pinjam = Barang::get()->where('id',$request->input('id_barang_'.$i)[0]['jumlah_pinjam']);
            // $int_jumlah_pinjam = (int)$jumlah_pinjam;
            echo "jumlah_pinjam : ".$jumlah_pinjam."<br>";
            
            // Get Jumlah request
            $jumlah_request = Barang::get()->where('id',$request->input('id_barang_'.$i)[0]['jumlah_request']);
            // $int_jumlah_request = (int)$jumlah_request;
            echo "jumlah_request : ".$jumlah_request."<br>";
            
            // Get input Jumlah barang
            $input_jumlah_barang =  $request->input('jumlah_barang_'.$i);
            // $int_input_jumlah_barang = (int)$input_jumlah_barang;
            echo "input_jumlah_barang : ".$input_jumlah_barang."<br>";

            // Get input Jumlah request
            $input_jumlah_request =  $request->input('jumlah_request_'.$i);
            // $int_input_jumlah_request = (int)$input_jumlah_request;
            echo "input_jumlah_request : ".$input_jumlah_request."<br>";
           
            
            // cek apakah barang tersedia atau tidak
            // if($int_sisa_barang>0){
                // Mengupdate data jumlah_pinjam dan sisa_barang
                // 1. jumlah_pinjam = jumlah_pinjam + input jumlah barang
                // 2. sisa_barang = sisa_barang - input jumlah barang
                // DB::table('barang')->where('id',$request->input('id_barang_'.$i))->update([
                //     'jumlah_pinjam' => $int_jumlah_pinjam + $int_input_jumlah_barang,
                //     'sisa_barang' => $sisa_barang - $int_input_jumlah_barang
                //     ]);
                // }
            // if($int_sisa_barang==0){
                // Mengupdate data jumlah_request
                // 1. jumlah_request = jumlah_request + input jumlah request
                // DB::table('barang')->where('id',$request->input('id_barang_'.$i))->update([
                //     'jumlah_request' => $int_jumlah_request + $int_input_jumlah_request
                //     ]);
                // }
        }
        // dd($int_jumlah_pinjam + $int_input_jumlah_barang);
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
