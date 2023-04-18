<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\calon_karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index(){
        $karyawan = calon_karyawan ::all();
        return view('test.index', compact(['account']));
    }
    public function create(){
        return view ('/LamanPendafataran');
    }
    public function store2(Request $request){
        
        calon_karyawan :: create($request -> except(['_token', 'submit']));
        return redirect ('/lamanPendaftaran');
    }
}
