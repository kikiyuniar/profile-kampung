<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class NewsController extends Controller
{
    // public function index()
    // {
    //     $articles = DB::table('news')->orderby('id', 'desc')->get();
    //     // return view('front.blog', ['articles' => $articles]);
    //     return view('admin.news');
    // }
    public function view_news()
    {
        $view = DB::table('news')->get();
        return view('front.blog', ['data' => $view]);
    }
    public function view_download()
    {
        $view = DB::table('transparan')->get();
        return view('front.download', ['data' => $view]);
    }
}
