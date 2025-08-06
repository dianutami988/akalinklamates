<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Siswa;

class AdminLaporanController extends Controller
{
    public function index(Request $request){
        $laporan=DB::table('laporans')->get();
        return view('Dashboard.Admin.Laporan.laporan',['laporan'=>$laporan]);
    }

    public function search(Request $request){
        if($request->has('search')){
            $laporan = DB::table('laporans')->where('nama','LIKE', '%'.$request->search.'%')->get();
        }
        else{
            $laporan = DB::table('laporans');
        }
        return view('dashboard.admin.laporan.laporan',['laporan'=>$laporan]);
    }
}
