<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('depan');
});

Auth::routes();

// group middleware untuk session login
Route::group(['middleware' => ['auth']], function () {
    // halaman front end pariwisata
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // halaman dashboard admin
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // halaman destinasi admin
    Route::get('/daftar-destinasi', [App\Http\Controllers\DestinasiController::class, 'list'])->name('ListDestinasi');
    Route::get('/tambah-dest', [App\Http\Controllers\DestinasiController::class, 'index'])->name('addDest');
    Route::match(['get','post'],'/input-dest', [App\Http\Controllers\DestinasiController::class, 'InputDest']);    
    Route::get('/updt-dest/{id}', [App\Http\Controllers\DestinasiController::class, 'ubah'])->name('updtDest');
    Route::match(['get','post'],'/updt-dest-proses/{id}', [App\Http\Controllers\DestinasiController::class, 'ubahDestProses'])->name('updtDest');
    Route::get('/dtl-dest/{id}', [App\Http\Controllers\DestinasiController::class, 'dtl'])->name('dtlDest');
    Route::get('/del-dest/{id}', [App\Http\Controllers\DestinasiController::class, 'hapus'])->name('hapusDest');

    // halaman kategori
    Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
    Route::match(['get','post'],'/input-kategori', [App\Http\Controllers\KategoriController::class, 'InputKategori']);
    Route::get('/updt-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'ubah'])->name('updtKategori');
    Route::match(['get','post'],'/updt-kategori-proses/{id}', [App\Http\Controllers\KategoriController::class, 'ubahKategoriProses'])->name('updtKategori');
    Route::get('/del-kategori/{id}', [App\Http\Controllers\KategoriController::class, 'hapus'])->name('hapusKategori');

    // halaman admin bupati
    Route::get('/bupati', [App\Http\Controllers\BupatiController::class, 'index'])->name('bupati');
    Route::match(['get','post'],'/input-bupati', [App\Http\Controllers\BupatiController::class, 'InputBupati']);
    Route::get('/del-bupati/{id}', [App\Http\Controllers\BupatiController::class, 'hapus'])->name('hapusBupati');
    Route::get('/updt-bupati/{id}', [App\Http\Controllers\BupatiController::class, 'ubah'])->name('updtBupati');
    Route::match(['get','post'],'/updt-bupati-proses/{id}', [App\Http\Controllers\BupatiController::class, 'ubahBupatiProses'])->name('updtBupatiProses');
    Route::get('/dtl-bupati/{id}', [App\Http\Controllers\BupatiController::class, 'dtl'])->name('dtlBupati');

    // about
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::get('/updt-about/{id}', [App\Http\Controllers\AboutController::class, 'ubah'])->name('updtAbout');
    Route::match(['get','post'],'/updt-about-proses/{id}', [App\Http\Controllers\AboutController::class, 'ubahAboutProses'])->name('updtAboutProses');

    // penginapan
    Route::get('/penginapan', [App\Http\Controllers\PenginapanController::class, 'index'])->name('penginapan');

    // transportasi
    Route::get('/transportasi', [App\Http\Controllers\TransportasiController::class, 'index'])->name('transportasi');
});