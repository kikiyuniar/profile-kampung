<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect('admin');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $view_username = DB::table('users')->where('email', $request->email)->get();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            foreach ($view_username as $username) {
                session(['login_name' => $username->name]);
            }
            return redirect('admin');
        }
        return redirect('/login')->with('danger', 'Email/Password Salah ');
    }

    public function showFormRegister()
    {
        return view('admin.add-account');
    }

    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];

        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if ($simpan) {
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect('list_account');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function list()
    {
        $articles = DB::table('users')->orderBy('id', 'desc')->paginate(5);
        return view('admin.list-account', ['data' => $articles]);
    }

    public function list_news_admin()
    {
        $news = DB::table('blogs')->orderByDesc('id')->paginate('5');
        return view('admin.list-news', ['data_news' => $news]);
    }

    public function del_news(Request $request)
    {
        DB::table('blogs')->where('id', '=', $request->id)->delete();
        return redirect()->back()->with('danger', 'Berhasil di hapus');
    }

    public function delete(Request $request)
    {
        DB::table('users')->where('id', '=', $request->id)->delete();
        return redirect()->back()->with('danger', 'Berhasil Di Hapus');
    }

    public function view_profile()
    {
        $user_cek =  Auth::user()->name;
        $view_profile = DB::table('users')->where('name', $user_cek)->get();
        return view('admin.core', ['data' => $view_profile]);
    }

    public function show_edit_account(Request $request)
    {
        $detail = DB::table('users')->where('id', $request->id)->get();
        return view('admin.edit-account', ['data' => $detail]);
    }

    public function action_edit_account(Request $request)
    {
        DB::table('users')->where('id', $request->id)
            ->update([
                'name' => $request->input('name'),
                'email'       => $request->input('email'),
                'password' => bcrypt($request->input('password'))
            ]);
        return redirect()->back()->with('success', 'Account Berhasil Diperbaruhi');
    }
}
