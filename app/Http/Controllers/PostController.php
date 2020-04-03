<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Post;
use Redirect;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add()
    {
        $post = Post::all();
        return view('addpeminjaman', compact('post'));
    }

    public function save(Request $request){
        $table= new Post();
        $table->acara = $request->input('acara');
        $table->tanggal = $request->input('tanggal');
        $table->waktu_mulai = $request->input('waktu_mulai');
        $table->waktu_selesai = $request->input('waktu_selesai');
        $table->save();
        return Redirect::back();
    }

    public function index()
    {
        $post = Post::all();
        return view('daftarpeminjaman', ['post' => $post]);
    }

    public function aksi()
    {
        $post = Post::all();
        return view('aksi', ['post' => $post]);
    }
}
