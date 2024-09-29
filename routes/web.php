<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


route::get('/', function(){
    return view('home.homepage');
});


route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::post('/add_permohonan', [HomeController::class, 'tambah_form_permohonan_informasi_publik']);

route::get('adminredirect', [HomeController::class, 'adminredirect']);

route::get('/form_permohonan_informasi_publik', [HomeController::class, 'form_permohonan_informasi_publik']);

route::get('/permohonan_informasi_publik', [AdminController::class, 'permohonan_informasi_publik']);

route::get('/view_addberita', [AdminController::class, 'view_addberita']);
route::post('/add_berita', [AdminController::class, 'add_berita']);
route::get('/view_showberita', [AdminController::class, 'view_showberita']);

route::get('/update_beritakiri/{id}', [AdminController::class, 'update_beritakiri'])->name('update_beritakiri');;
route::post('/update_beritakiri_confirm/{id}', [AdminController::class, 'update_beritakiri_confirm'])->name('update_beritakiri_confirm');;

route::delete('/delete_beritakiri/{id}', [AdminController::class, 'delete_beritakiri'])->name('delete_beritakiri');
route::delete('/delete_beritakanan/{id}', [AdminController::class, 'delete_beritakanan'])->name('delete_beritakanan');


route::get('/detail_permohonan_informasi_publik/{id}', [AdminController::class, 'detail_permohonan_informasi_publik']);

