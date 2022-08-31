<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\PesananDetail;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menu = Menu::all();
        $user = User::all();
        $pesanan_detail = PesananDetail::get();
        // $pesanan = Pesanan::all();

        return view('admin.index', compact('user', 'pesanan_detail', 'menu'));
    }
    public function dataAjax()
    {
        $data = Menu::all();
        // $user = User::all();
        // $pesanan_detail = PesananDetail::get();
        // $pesanan = Pesanan::all();

        return response()->json($data);

    }
    public function user()
    {

        $user = User::all();


        return view('admin.user-data', compact('user'));
    }

    public function pesanan_pelanggan()
    {
        // $pesanan = PesananDetail::all();

        return view('admin.index', compact('pesanan'));
    }
    public function kirim_pesan($id)
    {
        $penerima = PesananDetail::where('status', 0)->where('id', $id)->get();
        return view('admin.kirim_pesan', compact('penerima'));
    }

    public function kirim_pesan_user(Request $request)
    {
        $pesanan_detail = PesananDetail::find($request->user_id);
        $pesanan_detail->status = $request->status;
        $pesanan_detail->save();

        // return redirect('/data-pesanan');
        return response()->json([


        ]);
    }

    public function data_pesanan()
    {
        $menu = Menu::all();
        $user = User::all();
        $pesanan_detail = PesananDetail::with('menu')->get();
        // $pesanan = Pesanan::all();

        return view('admin.pesanan_pelanggan', compact('user', 'pesanan_detail'));
    }

    public function store_menu(Request $request)
    {
        //storage/app

        // $file_nm = $request->foto->getClientOriginalName();
        // $image = $request->foto->storeAs('foto_produk', $file_nm);

        // dd('berhasil');
        $menu = new Menu;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        // $menu->stok = $request->stok;

        // $menu->foto = $image;


        $menu->save();

    }


    public function edit($id)
    {
        $menu = Menu::where('id', $id)->first();
        // dd($menu);
        return view('admin.edit', compact('menu'));
    }
    public function edit_proses(Request $request, $id)
    {

        $file_nm = $request->foto->getClientOriginalName();
        $image = $request->foto->storeAs('foto_produk', $file_nm);


        $menu = Menu::where('id', $id)->first();
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->stok = $request->stok;
        $menu->foto = $image;


        $menu->update();




        return redirect('/data-produk');
    }
    public function delete($id)
    {

        $menu = Menu::where('id', $id);
        $menu->delete();


        return redirect('/data-produk');
    }


    public function req()
    {
        // $user = new User;
        // $user->name = 'Arif';
        // $user->email = 'arif@mail.com';
        // $user->level = 'admin';
        // $user->password = bcrypt('arifarif');

        // $user->save();

        // return "ok";
        $pesanan = PesananDetail::all();
        $menu = Menu::all();
        return view('admin.test', compact('pesanan'));
    }
}
