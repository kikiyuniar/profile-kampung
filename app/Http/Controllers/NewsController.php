<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class NewsController extends Controller
{
    public function index()
    {
        $articles = DB::table('news')->orderby('id', 'desc')->get();
        // return view('front.blog', ['articles' => $articles]);
        return view('admin.news');
    }
    public function view_news()
    {
        $view = DB::table('news')->get();
        return view('front.blog', ['data' => $view]);
    }
    public function add_news(Request $request)
    {
        $slug_judul = str_replace(" ", "-", $request->slug);
        // $waktu = Carbon::createFromFormat("d-m-Y", $request->waktu)->timestamp;

        DB::table('news')
            ->insert([
                'judul_news'    => $request->judul_news,
                'slug'          => $slug_judul,
                'isi'           => $request->isi,
                'isi_thumbnail' => $request->isi_thumbnail,
                'waktu'         => date('d-m-Y')
            ]);
        return redirect()->back()->with('success', 'Berhasil DiTambahkan');
    }
}
