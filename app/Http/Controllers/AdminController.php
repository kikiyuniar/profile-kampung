<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        // $blog = DB::table('count_blogs')->get();
        // $user = DB::table('count_users')->get();
        // $msg = DB::table('count_msg')->get();
        // $pjc = DB::table('count_project')->get();
        // return view('page_layout.dashboard',[
        //     'blog' => $blog,
        //     'user' => $user,
        //     'msg' => $msg,
        //     'project' => $pjc
        //     ]);

        return view('admin.dashboard');
    }
}
