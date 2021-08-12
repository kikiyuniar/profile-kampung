<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InputController extends Controller
{
    public function index()
    {
        $data = DB::table('transparan')->get();

        return view('admin.transparan', [
            'data' => $data
        ]);
    }
    public function update_transparant(Request $request)
    {
        // DB::table('transparan')->where('id', $request->id)
        //     ->update([
        //         'judul'    => $request->judul,
        //         'isi'      => $request->isi,
        //     ]);
        // return redirect()->back();

        DB::table('transparan')->where('id', $request->id)
            ->update([
                'judul' => $request->input('judul'),
                'isi'   => $request->input('isi')
            ]);

        return redirect()->back()->with('success', 'Transparansi Berhasil Diperbaruhi');
    }
}
