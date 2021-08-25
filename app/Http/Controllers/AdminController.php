<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        $blog = DB::table('blogs')->count();
        $user = DB::table('users')->count();
        $msg = DB::table('contact')->count();
        return view('admin.dashboard', [
            'blog' => $blog,
            'user' => $user,
            'contact' => $msg
        ]);
    }
    public function list()
    {
        $articles = DB::table('blogs')->orderBy('id', 'desc')->paginate(5);
        return view('admin.add-news', ['data' => $articles]);
    }
}
