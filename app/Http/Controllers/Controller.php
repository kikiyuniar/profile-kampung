<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function home()
    // {
    //     $blog = DB::table('blogs');
    //     $user = DB::table('users')->count();
    //     // $msg = DB::table('count_msg')->get();
    //     return view('admin.dashboard', [
    //         'blog' => $blog,
    //         'user' => $user
    //     ]);
    // }
    public function home()
    {
        $detail = DB::table('views_two_blog')->get();

        return view('front.home', ['data' => $detail]);
    }
}
