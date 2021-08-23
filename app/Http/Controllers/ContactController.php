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
        return redirect()->back();
    }
}
