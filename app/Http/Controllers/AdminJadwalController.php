<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Jadwal;


class AdminJadwalController extends Controller
{
    public function index(Request $request){
        $jadwal=DB::table('jadwals')->get();
        return view('Dashboard.Admin.Guru.jadwalguru',['jadwal'=>$jadwal]);
    }

    public function create(Request $request){
        return view('Dashboard.Admin.Guru.tambahjadwal');
    }

    public function store(Request $request){
        DB::table('jadwals')->insert([
            'jam'=>$request->jam,
            'hari'=>$request->hari,
            'matapelajaran'=>$request->matapelajaran,
            'guru'=>$request->guru,
            'kelas'=>$request->kelas
        ]);
        return redirect('admin/guru/jadwal')->with('addjadwal', true);
    }

    public function edit($id){
        $jadwal = DB::table('jadwals')->where('id',$id)->get();
        return view('Dashboard.Admin.Guru.editjadwal',['jadwal'=>$jadwal]);
    }

    public function update(Request $request){
        DB::table('jadwals')->where('id',$request->id)->update([
            'jam'=>$request->jam,
            'hari'=>$request->hari,
            'matapelajaran'=>$request->matapelajaran,
            'guru'=>$request->guru,
            'kelas'=>$request->kelas
        ]);
        return redirect('/admin/guru/jadwal')->with('editedjadwal', true);
    }

    public function delete($id){
        DB::table('jadwals')->where('id',$id)->delete();
        return redirect('/admin/guru/jadwal')->with('deletedjadwal', true);
    }

    public function search(Request $request){
        if($request->has('search')){
            $jadwal = DB::table('jadwals')->where('kelas','LIKE', '%'.$request->search.'%')->get();
        }
        else{
            $jadwal = DB::table('jadwals');
        }
        return view('dashboard.admin.guru.jadwalguru',['jadwal'=>$jadwal]);
    }
}
