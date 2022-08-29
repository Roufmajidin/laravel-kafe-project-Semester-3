<?php

use App\Http\Controllers\AdminController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//middleware (hak akses)

    Route::group(['middleware' => 'admin'], function() {

        Route::get('/data-produk', [AdminController::class, 'index']);
        Route::get('/data-user', [AdminController::class, 'user']);
        Route::get('/data-pesanan', [AdminController::class, 'data_pesanan']);
        Route::get('/pelanggan', [AdminController::class, 'pelanggan']);
        Route::get('/kirim_pesan/{id}', [AdminController::class, 'kirim_pesan']);
        Route::post('/admin/kirim_pesanUser', [AdminController::class, 'kirim_pesan_user'])->name('kirim_pesanUser');
        Route::get('/tambah-produk', function () {
            return view('admin.tambah-produk');
        });
        Route::get('/edit/{id}', [AdminController::class, 'edit']);
        Route::patch('/edit-proses/{id}', [AdminController::class, 'edit_proses']);
        Route::get('/req', [AdminController::class, 'req']);


        Route::post('/tambah-produk', [AdminController::class, 'store_menu']);
        Route::get('/hapus/{id}', [AdminController::class, 'delete']);
        Route::get('/get', [AdminController::class, 'c']);



    });
 Route::get('/tambah-menu', function () {
            $menu = new App\Models\Menu();
            $menu->nama_menu = 'Burger';
            $menu->stok = '12';
            $menu->foto = 'thumbnail/satu.jpg';
            $menu->harga = '12000';


            $menu->save;

            return 'ok';



        });
