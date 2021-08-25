<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Match_;
use Illuminate\Support\Facades\Storage;

// use app\Models\Struktur;
// use Illuminate\Support\Str;

class StrukturController extends Controller
{
    public function add_struktur()
    {
        $data = DB::table('struktur')->orderByDesc('id')->limit('1')->get();

        return view('admin.add-struktur', [
            'data' => $data
        ]);
    }
    public function struktur_front()
    {
        $data = DB::table('struktur')->orderByDesc('id')->limit('1')->get();

        return view('front.struktur', [
            'data' => $data
        ]);
    }
    // public function update_struktur(Request $request)
    // {
    //     if ($request->file('foto')) {
    //         if ($customer->struktur) {
    //             // get filename
    //             $filename = str_replace('/storage/customers/', '', $customer->struktur);
    //             // remove old foto
    //             unlink(storage_path('app/public/customers/' . $filename));
    //         }
    //         // add new foto
    //         $path = Storage::putFile('public/customers', $request->file('foto'));
    //         $url = Storage::url($path);

    //         $customer->struktur = $url;
    //     }

    //     $saveResult = $customer->save();

    //     return redirect()->back()->with('success', 'Transparansi Berhasil Diperbaruhi');
    // }

    public function post_struktur(Request $request)
    {
        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('img_post'), $imageName);
        DB::table('struktur')
            ->insert([
                'foto'          => $imageName,
            ]);
        return redirect()->back()->with('success', 'Berhasil DiTambahkan');
    }
    // public function deleteMatch($id)
    // {
    //     $match = Match::find($id);
    //     $match->delete();
    //     File::delete(public_path().'/asset/match_images/' . $match->flag_2);  // untuk menghapus file nya
    //     return redirect('/panel/master-match')->with("deleteSuccess", "Berhasil Menghapus Satu Pertandingan");

    // }

    // protected function deleteOldImage()
    // {
    //     if (auth()->user()->struktur) {
    //         Storage::delete('dashboard\img_post' . auth()->user()->struktur);
    //     }
    // }

    // public function destroy($id)
    // {
    //     $avatar = Avatar::findOrFail($id);

    //     if (Storage::delete($avatar->filename)) {
    //         $avatar->delete();
    //     }

    //     return redirect('/avatars');
    // }
}
