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
        // $msg = DB::table('count_msg')->get();
        return view('admin.dashboard', [
            'blog' => $blog,
            'user' => $user
        ]);
    }
}
