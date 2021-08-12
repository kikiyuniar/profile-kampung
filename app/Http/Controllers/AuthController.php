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
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect('admin');
        }
        return view('admin\login');
    }

    public function login(Request $request)
    {
        // $cek_account_email = DB::table('users')->where('email', $request->email)->count();
        // $cek_account_password = User::where('email', $request->email)->count();
        // if ($cek_account_email != 1) {
        //     return Redirect()->back()->with('danger', 'Email Salah ');
        // } elseif ($cek_account_email != 0) {
        //     $view_username = DB::table('users')->where('email', $request->email)->get();
        //     $cek_account_password = User::where('email', $request->email)->firstOrfail();

        //     if (Hash::check($request->password, $cek_account_password->password)) {
        //         foreach ($view_username as $username) {
        //             $data = array();
        //             session(['login_status' => $username->status]);
        //         }

        //         session(['berhasil_login' => true]);
        //         return redirect('/admin');
        //     } else {
        //         return Redirect()->back()->with('danger', 'Password Salah ');
        //     }
        // }


        $view_username = DB::table('users')->where('email', $request->email)->get();
        // $cek_msg = DB::table('contact')->where('status', 'Belum Terbaca')->count();
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
        return view('admin\register');
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
            return redirect('/admin');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
