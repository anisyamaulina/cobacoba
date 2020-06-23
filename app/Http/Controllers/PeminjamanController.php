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
        $table->barang_tersedia = $request->input('barang_tersedia');
        $table->jumlah_pinjam = $request->input('jumlah_pinjam');
        $table->jumlah_request = $request->input('jumlah_request');
        $table->save();
        return Redirect::back();
    }

    public function index()
    {
        // dd(Auth::id());
        // $peminjaman = DB::table('peminjaman')->where('id_user', $id)->get();

        $peminjaman = Peminjaman::with('user','id')
                    ->whereHas('id', function($q){
                        $q->where('id_user', $id)->orderBy('created_at', 'ASC');
                    }) 
                    ->get();

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
        'barang_tersedia' => $request->barang_tersedia,
        'jumlah_pinjam' => $request->jumlah_pinjam,
        'jumlah_request' => $request->jumlah_request,
        'tanggal' => $request->tanggal,
        'waktu_mulai' => $request->waktu_mulai,
        'waktu_selesai' => $request->waktu_selesai
		
    ]);
	// alihkan halaman ke halaman datapeminjaman
	return redirect('/datapeminjaman');
    }

    public function submit_peminjaman(Request $request)
    {
        // dd($request->input());
        $table = new Peminjaman();
        $table->acara = $request->input('acara');
        $table->ruang = $request->input('ruang');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');
        $table->save();

        for ($i = 1; $i <= sizeof(Barang::get()); $i++) {
            // echo $request->input('id_barang_' . $i);
            if ($i == 1) {
                // echo $request->input('id_barang_' . $i);
                // Get Sisa barang
                $barang_tersedia = Barang::get()->where('id', $request->input('id_barang_' . $i))[0]["barang_tersedia"];
                $int_barang_tersedia = (int) $barang_tersedia;
                // echo "sisa barang : " . $int_barang_tersedia . "<br>";

                // // Get Jumlah yang dipinjam
                $jumlah_pinjam = Barang::get()->where('id', $request->input('id_barang_' . $i))[0]['jumlah_pinjam'];
                $int_jumlah_pinjam = (int) $jumlah_pinjam;
                // echo "jumlah_pinjam : " . $jumlah_pinjam . "<br>";

                // // Get Jumlah request
                $jumlah_request = Barang::get()->where('id', $request->input('id_barang_' . $i))[0]['jumlah_request'];
                $int_jumlah_request = (int) $jumlah_request;
                // echo "jumlah_request : " . $jumlah_request . "<br>";

                // // Get input Jumlah barang
                $input_barang_tersedia =  $request->input('barang_tersedia_' . $i);
                $int_input_barang_tersedia = (int) $input_barang_tersedia;
                // echo "input_barang_tersedia : " . $input_barang_tersedia . "<br>";

                // // Get input Jumlah Pinjam
                $input_jumlah_pinjang =  $request->input('jumlah_pinjam_' . $i);
                $int_input_jumlah_pinjam = (int) $input_jumlah_pinjang;
                // echo "input_barang_tersedia : " . $input_barang_tersedia . "<br>";

                // Get input Jumlah request
                $input_jumlah_request =  $request->input('jumlah_request_' . $i);
                $int_input_jumlah_request = (int) $input_jumlah_request;
                // echo "input_jumlah_request : " . $input_jumlah_request . "<br>";

                // dd("error");
                // cek apakah barang tersedia atau tidak
                if ($int_input_jumlah_pinjam > $int_barang_tersedia) {
                    // Mengupdate data jumlah_pinjam dan data jumlah_request
                    // 1. jumlah_request = input jumlah_pinjam - barang_tersedia
                    // 2. jumlah_pinjam = barang_tersedia
                    DB::table('barang')->where('id', $request->input('id_barang_' . $i))->update([
                        'barang_tersedia' => 0,
                        'jumlah_pinjam' => $int_jumlah_pinjam + $int_barang_tersedia,
                        'jumlah_request' => $int_jumlah_request + ($int_input_jumlah_pinjam - $int_barang_tersedia)
                    ]);
                }else if ($int_barang_tersedia > 0) {
                    // Mengupdate data jumlah_pinjam dan barang_tersedia
                    // 1. jumlah_pinjam = jumlah_pinjam + input jumlah barang
                    // 2. barang_tersedia = barang_tersedia - input jumlah barang
                    DB::table('barang')->where('id', $request->input('id_barang_' . $i))->update([
                        'jumlah_pinjam' => $int_jumlah_pinjam + $int_input_jumlah_pinjam,
                        'barang_tersedia' => $barang_tersedia - ($int_input_jumlah_pinjam + $int_input_jumlah_request)
                    ]);
                }
                else if ($int_barang_tersedia == 0) {
                    // Mengupdate data jumlah_request
                    // 1. jumlah_request = jumlah_request + input jumlah request
                    DB::table('barang')->where('id', $request->input('id_barang_' . $i))->update([
                        'jumlah_request' => $int_jumlah_request + $int_input_jumlah_request
                    ]);
                }
            } else {
                // Get Sisa barang
                $barang_tersedia = Barang::get()->where('id', $request->input('id_barang_' . $i))[$i-1]['barang_tersedia'];
                $int_barang_tersedia = (int) $barang_tersedia;
                // echo "sisa barang : " . $barang_tersedia . "<br>";

                // // Get Jumlah yang dipinjam
                $jumlah_pinjam = Barang::get()->where('id', $request->input('id_barang_' . $i))[$i-1]['jumlah_pinjam'];
                $int_jumlah_pinjam = (int) $jumlah_pinjam;
                // echo "jumlah_pinjam : " . $jumlah_pinjam . "<br>";

                // // Get Jumlah request
                $jumlah_request = Barang::get()->where('id', $request->input('id_barang_' . $i))[$i-1]['jumlah_request'];
                $int_jumlah_request = (int) $jumlah_request;
                // echo "jumlah_request : " . $jumlah_request . "<br>";

                // // Get input Jumlah barang
                $input_barang_tersedia =  $request->input('barang_tersedia_' . $i);
                $int_input_barang_tersedia = (int) $input_barang_tersedia;
                // echo "input_barang_tersedia : " . $input_barang_tersedia . "<br>";

                // Get input Jumlah request
                $input_jumlah_request =  $request->input('jumlah_request_' . $i);
                $int_input_jumlah_request = (int) $input_jumlah_request;
                // echo "input_jumlah_request : " . $input_jumlah_request . "<br>";

                // // Get input Jumlah Pinjam
                $input_jumlah_pinjang =  $request->input('jumlah_pinjam_' . $i);
                $int_input_jumlah_pinjam = (int) $input_jumlah_pinjang;
                // echo "input_barang_tersedia : " . $input_barang_tersedia . "<br>";

                // dd("error");
                // cek apakah barang tersedia atau tidak
                if ($int_input_jumlah_pinjam > $int_barang_tersedia) {
                    // Mengupdate data jumlah_pinjam dan data jumlah_request
                    // 1. jumlah_request = input jumlah_pinjam - barang_tersedia
                    // 2. jumlah_pinjam = barang_tersedia
                    DB::table('barang')->where('id', $request->input('id_barang_' . $i))->update([
                        'barang_tersedia' => 0,
                        'jumlah_pinjam' => $int_jumlah_pinjam + $int_barang_tersedia,
                        'jumlah_request' => $int_jumlah_request + ($int_input_jumlah_pinjam - $int_barang_tersedia)
                    ]);
                }else if ($int_barang_tersedia > 0) {
                    // Mengupdate data jumlah_pinjam dan barang_tersedia
                    // 1. jumlah_pinjam = jumlah_pinjam + input jumlah barang
                    // 2. barang_tersedia = barang_tersedia - input jumlah barang
                    DB::table('barang')->where('id', $request->input('id_barang_' . $i))->update([
                        'jumlah_pinjam' => $int_jumlah_pinjam + $int_input_jumlah_pinjam,
                        'barang_tersedia' => $barang_tersedia - ($int_input_jumlah_pinjam + $int_input_jumlah_request)
                    ]);
                }
                else if ($int_barang_tersedia == 0) {
                    // Mengupdate data jumlah_request
                    // 1. jumlah_request = jumlah_request + input jumlah request
                    DB::table('barang')->where('id', $request->input('id_barang_' . $i))->update([
                        'jumlah_request' => $int_jumlah_request + $int_input_jumlah_request
                    ]);
                }
            }
        }
        // dd($int_jumlah_pinjam + $int_input_barang_tersedia);
        // dd("");
        return Redirect::back();
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
