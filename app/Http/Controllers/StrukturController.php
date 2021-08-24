<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrukturController extends Controller
{
    public function index()
    {
        $data = DB::table('struktur')->get();

        return view('admin.struktur', [
            'data' => $data
        ]);
    }
    public function update_struktur(Request $request)
    {
        DB::table('struktur')->where('id', $request->id)
            ->update([
                'isi'   => $request->input('isi')
            ]);

        return redirect()->back()->with('success', 'Transparansi Berhasil Diperbaruhi');
    }
}
