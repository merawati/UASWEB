<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home = DB::table('siswa')->get();

        return view('index',['siswa'=> $home]);
    }

    public function tambah (){
        return view('tambah');
    }

    public function store(Request $request){

        DB::table('siswa')->insert([
            'nama_siswa'=> $request->namasiswa,
            'nisn'=> $request->nisn,
            'tempat_lahir'=> $request->tempatlahir,
            'jenis_kelamin'=> $request->jeniskelamin,
            'lulusan'=> $request->asalsekolah
        ]);
        return redirect('/home');
    }

    public function edit($nisn){

        $home = DB::table('siswa')->where('jenis_kelamin',$nisn)->get();

        return view('edit',['siswa'=> $nisn]);
    }

    public function update(Request $request){

        DB::table('siswa')->insert([
            'nama_siswa'=> $request->namasiswa,
            'nisn'=> $request->nisn,
            'tempat_lahir'=> $request->tempatlahir,
            'jenis_kelamin'=> $request->jeniskelamin,
            'lulusan'=> $request->asalsekolah
        ]);
        return redirect('/home');
    }
}
