<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    public function index()
    {
        return view('admin.news');
    }
    public function list()
    {
        $articles = DB::table('blogs')->orderBy('id', 'desc')->paginate(5);
        return view('admin.list-news', ['data' => $articles]);
    }

    public function add_news(Request $request)
    {
        $slug_judul = str_replace(" ", "-", $request->judul);
        DB::table('blogs')
            ->insert([
                'judul'    => $request->judul,
                'slug'   => $slug_judul,
                'waktu'       => $request->waktu,
                'isi_thumbnail' => $request->isi_thumbnail,
                'isi'           => $request->isi
            ]);
        return redirect('/list_news')->with('success', 'Berhasil Di Tambahkan');
    }

    public function action_edit_news(Request $request)
    {
        $slug_judul = str_replace(" ", "-", $request->judul);
        DB::table('blogs')->where('id', $request->id)
            ->update([
                'judul' => $request->input('judul'),
                'slug'   => $slug_judul,
                'waktu'       => $request->input('waktu'),
                'isi_thumbnail' => $request->input('isi_thumbnail'),
                'isi'   => $request->input('isi'),

            ]);

        return redirect()->back()->with('success', 'News Berhasil Diperbaruhi');
    }

    public function del(Request $request)
    {
        DB::table('blogs')->where('id', '=', $request->id)->delete();
        return redirect()->back()->with('danger', 'Berhasil Di Hapus');
    }
    public function detail(Request $request)
    {
        $detail = DB::table('blogs')->where('slug', $request->slug)->get();

        return view('admin.edit-news', ['data' => $detail]);
    }
    public function view_edit_news(Request $request)
    {
        $detail = DB::table('blogs')->where('id', $request->id)->get();

        return view('admin.edit-news', ['data' => $detail]);
    }
}
