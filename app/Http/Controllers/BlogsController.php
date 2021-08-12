<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Patient;

class BlogsController extends Controller
{
    public function index()
    {
        return view('admin.news');
    }
    public function list()
    {
        // $post = Post::orderBy('created_at', 'desc')->paginate(5));
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

    public function update_blog(Request $request)
    {
        if ($request->foto == null) {
            DB::table('blogs')->where('id', $request->id)
                ->update([
                    'judul_blog'    => $request->judul_blog,
                    'waktu'         => $request->waktu,
                    'isi'           => $request->isi,
                    'isi_thumbnail' => $request->isi_thumbnail
                ]);
        } else {
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('assets_post_blog'), $imageName);
            DB::table('blogs')->where('id', $request->id)
                ->update([
                    'judul_blog'    => $request->judul_blog,
                    'waktu'         => $request->waktu,
                    'isi'           => $request->isi,
                    'isi_thumbnail' => $request->isi_thumbnail,
                    'foto'          => $imageName
                ]);
        }

        return redirect()->back()->with('success', 'Berhasil Di Update');
    }

    public function del(Request $request)
    {
        DB::table('blogs')->where('id', '=', $request->id)->delete();
        return redirect()->back()->with('danger', 'Berhasil Di Hapus');
    }

    function action(Request $request)
    {
        // get the search term
        $text = $request->input('text');

        // search the members table
        $data = DB::table('blogs')->where('id', 'Like', $text)->get();

        // return the results
        return response()->json($data);
    }
}
