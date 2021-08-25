<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UmkmComtroller extends Controller
{
    public function add_umkm()
    {
        $data = DB::table('umkm')->orderByDesc('id')->get();

        return view('admin.add-umkm', [
            'data' => $data
        ]);
    }

    public function umkm_front()
    {
        $data = DB::table('umkm')->orderByDesc('id')->get();

        return view('front.umkm', [
            'data' => $data
        ]);
    }

    public function post_umkm(Request $request)
    {
        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('img_umkm'), $imageName);
        DB::table('umkm')
            ->insert([
                'judul'      => $request->judul,
                'foto'       => $imageName,
                'keterangan' => $request->keterangan
            ]);
        return redirect()->back()->with('success', 'Berhasil DiTambahkan');
    }
}
