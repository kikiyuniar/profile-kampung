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
    // public function list()
    // {
    //     $articles = DB::table('blogs')->orderBy('id', 'desc')->paginate(5);
    //     return view('admin.add-news', ['data' => $articles]);
    // }


    public function add_news(Request $request)
    {
        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('img_news'), $imageName);
        $slug_judul = str_replace(" ", "-", $request->judul);
        DB::table('blogs')
            ->insert([
                'judul'    => $request->judul,
                'slug'   => $slug_judul,
                'waktu'       => $request->waktu,
                'isi_thumbnail' => $request->isi_thumbnail,
                'foto'         => $imageName,
                'isi'           => $request->isi
            ]);
        return redirect('/listnews')->with('success', 'Berhasil Di Tambahkan');
    }

    public function action_edit_news(Request $request)
    {
        // $slug_judul = str_replace(" ", "-", $request->judul);
        // DB::table('blogs')->where('id', $request->id)
        //     ->update([
        //         'judul' => $request->input('judul'),
        //         'slug'   => $slug_judul,
        //         'isi_thumbnail' => $request->input('isi_thumbnail'),
        //         'isi'   => $request->input('isi'),

        //     ]);
        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('img_news'), $imageName);
        DB::table('blogs')->where('id', $request->id)
            ->update([
                'judul'    => $request->judul,
                'isi'           => $request->isi,
                'isi_thumbnail' => $request->isi_thumbnail,
                'foto'         => $imageName,
            ]);

        return redirect()->back()->with('success', 'News Berhasil Diperbaruhi');
    }


    // public function delete(Request $request)
    // {
    //     DB::table('blogs')->where('id', '=', $request->id)->delete();
    //     return redirect()->back()->with('danger', 'Berhasil Di Hapus');
    // }
    public function detail(Request $request)
    {
        $detail = DB::table('blogs')->where('id', $request->id)->get();

        return view('admin.edit-news', ['data' => $detail]);
    }

    public function detail_front(Request $request)
    {
        $detail = DB::table('blogs')->where('slug', $request->slug)->get();

        return view('front.detail-blog', ['data' => $detail]);
    }

    public function news_front()
    {
        $detail = DB::table('blogs')->orderBy('id', 'desc')->paginate(4);
        return view('front.blog', ['data' => $detail]);
    }
}
