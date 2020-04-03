<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profil', ['profil' => $users]);
    }

    public function edit($id)
    {
	// mengambil data user berdasarkan id yang dipilih
	$users = DB::table('users')->where('id',$id)->get();
	// passing data user yang didapat ke view editprofil.blade.php
	return view('editprofil',['users' => $users]);
 
    }

    public function update(Request $request)
    {
	// update data users
	DB::table('users')->where('id',$request->id)->update([
		'name' => $request->name,
        'jabatan' => $request->jabatan,
        'fakultas' => $request->fakultas,
        'prodi' => $request->prodi,
        'kode' => $request->kode,
        'status' => $request->status,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
        'email' => $request->email,
        'password' => $request->password
		
	]);
	// alihkan halaman ke halaman profil
	return redirect('/profil');
    }

}