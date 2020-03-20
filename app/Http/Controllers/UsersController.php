<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$users = DB::table('users')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['users' => $users]);
 
    }

    public function update(Request $request)
    {
	// update data users
	DB::table('users')->where('id',$request->id)->update([
		'name' => $request->name,
        'jabatan' => $request->jabatan,
        'fakultas' => $request->fakultas,
        'jurusan' => $request->jurusan,
        'kode' => $request->kode,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
        'email' => $request->email,
        'password' => $request->password
		
	]);
	// alihkan halaman ke halaman profil
	return redirect('/profil');
    }

}