<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function add()
    // {
    //     $post = Post::all();
    //     return view('post.add', compact('post'));
    // }

    public function add(Request $request){
        $table= new Post();
        $table->acara = $request->input('acara');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');
        $table->save();
        return redirect('post.add')->with(['success' => 'Data peminjaman berhasil ditambahkan']);;
    }

    public function save(Request $request)
    {
        //validasi data
        $this->validate($request, [
            'acara'	=> 'required|max:255|unique:post|string',
            'tanggal'	=> 'required|max:255|unique:post|date',
            'waktu_mulai'	=> 'required|max:255|unique:post|time',
            'waktu_selesai'	=> 'required|max:255|unique:post|time'
        ]);

        //menyimpan ke table posts kemudian redirect page 
        $post = Post::create([
            'acara' => $request->acara,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai
            ]);
        return redirect(route('post.add'));
    }

}
