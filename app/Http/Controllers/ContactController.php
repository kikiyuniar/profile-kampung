<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function add_contact(Request $request)
    {
        DB::table('contact')
            ->insert([
                'name'      => $request->name,
                'email'     => $request->email,
                'pesan'     => $request->pesan
            ]);
        return redirect()->back()->with('success', 'Berhasil Di Tambahkan');
    }

    public function view_contact()
    {
        $detail = DB::table('contact')->orderBy('id', 'desc')->paginate(5);
        return view('admin.list-contact', ['data' => $detail]);
    }

    public function del(Request $request)
    {
        DB::table('contact')->where('id', '=', $request->id)->delete();
        return redirect()->back()->with('danger', 'Berhasil Di Hapus');
    }
}
