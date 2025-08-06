<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Guru;

class AdminGuruController extends Controller
{
    public function index(Request $request)
    {
        $guru = DB::table('gurus')->get();
        return view('Dashboard.Admin.Guru.dataguru', ['guru' => $guru]);
    }

    public function create(Request $request)
    {
        return view('Dashboard.Admin.Guru.tambahguru');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:gurus,username',
            'password' => 'required|string|min:6',
            'nip' => 'required|numeric|unique:gurus,nip',
            'alamat' => 'required|string|max:255',
            'jeniskelamin' => 'required|in:Laki-Laki,Perempuan',
        ]);

        // Simpan data ke database
        Guru::create([
            'nama' => $validated['nama'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']), // Enkripsi password
            'nip' => $validated['nip'],
            'alamat' => $validated['alamat'],
            'jeniskelamin' => $validated['jeniskelamin'],
        ]);

        return redirect('/admin/guru')->with('success', 'Data guru berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $guru = DB::table('gurus')->where('id', $id)->get();
        return view('Dashboard.Admin.Guru.editguru', ['guru' => $guru]);
    }

    public function update(Request $request)
    {
        DB::table('gurus')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
        ]);
        return redirect('/admin/guru')->with('edited', true);
    }

    public function delete($id)
    {
        DB::table('gurus')->where('id', $id)->delete();
        return redirect('/admin/guru')->with('deleted', true);
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $guru = DB::table('gurus')->where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $guru = DB::table('gurus');
        }
        return view('dashboard.admin.guru.dataguru', ['guru' => $guru]);
    }
}
