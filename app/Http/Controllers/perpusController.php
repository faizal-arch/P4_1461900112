<?php

namespace App\Http\Controllers;
use App\Exports\PerpusExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class perpusController extends Controller
{
    //
	public function menu(){
	return view ("menu0112");
	}
	public function viewbuku(){
	$buku = DB::table('buku')->get() ;
	return view ('daftarbuku0112', ['buku'=>$buku]);
	}
	public function viewletak(){
	$buku = DB::table('buku')
	->join ('rak_buku','rak_buku.id','=','rak_buku.id')
	->select ('buku.judul','buku.tahun_terbit', 'rak_buku.letak_buku')
	->get();
	return view ('letakbuku0112', ['buku'=>$buku]);
	}
	public function viewjenis(){
	$jenis = DB::table('jenis_buku')
	->join ('buku','buku.id','=','jenis_buku.id')
	->select ('buku.judul','buku.tahun_terbit', 'jenis_buku.jenis')
	->get();
	return view ('jenisbuku0112', ['jenisbuku'=>$jenis]);
	}
	public function export()
	{
		return Excel::download(new PerpusExport, 'perpus.xlsx');
	
	
	}
	
	
}
