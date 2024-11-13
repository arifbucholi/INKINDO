<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\MessagesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/detail-berita', function () {
    return view('detail-berita');
});

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/alur', function () {
    return view('alur');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/kode-etik', function () {
    return view('kode-etik');
});

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/learning-center', function () {
    return view('learning-center');
});

Route::get('/konstruksi', function () {
    return view('konstruksi');
});

Route::get('/non-konstruksi', function () {
    return view('non-konstruksi');
});

Route::get('/indexasli', function () {
    return view('admin.indexasli');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('admin/login', function () {
    return view('admin/login');
});

// Route::get('admin/seo', function () {
//     return view('admin.seo');
// });








Route::get('/admin2', function () {
    return view('admin.index2');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// -----------------------------------------------GUEST------------------------------------------------------------ //
Route::get('/anggota', [MemberController::class, 'indexUser'])->name('anggota.indexUser');
Route::get('/anggota/print', [MemberController::class, 'printMembers'])->name('anggota.print');
Route::get('/anggota/download-template', [MemberController::class, 'downloadTemplate'])->name('anggota.downloadTemplate');
Route::get('/anggota/download-pdf', [MemberController::class, 'downloadPDF'])->name('anggota.downloadPDF');
Route::get('/anggota/copy', [MemberController::class, 'copyMembers'])->name('anggota.copy');




// -----------------------------------------------ADMIN------------------------------------------------------------ //

//Route halaman
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/messages', [AdminController::class, 'index'])->name('admin.index');

//Anggota
Route::get('admin/anggota', [MemberController::class, 'index'])->name('anggota.index');
Route::get('/anggota/store', [MemberController::class, 'store'])->name('admin.anggota.store');
Route::get('/anggota/{id}', [MemberController::class, 'update'])->name('admin.anggota.update');
Route::delete('/anggota/{id}', [MemberController::class, 'destroy'])->name('admin.anggota.destroy');
Route::post('/anggota/import', [MemberController::class, 'import'])->name('anggota.import');

//Testimoni
Route::get('admin/messages', [MessagesController::class, 'index'])->name('admin.messages.index');
Route::get('messages/{id}/edit', [MessagesController::class, 'edit'])->name('admin.messages.edit');
Route::delete('messages/{id}', [MessagesController::class, 'destroy'])->name('admin.messages.destroy');
Route::put('messages/{id}', [MessagesController::class, 'update'])->name('admin.messages.update');
Route::post('messages', [MessagesController::class, 'store'])->name('admin.messages.store');
// Route::post('barcode', [MessagesController::class, 'storeBarcode'])->name('admin.messages.storeBarcode');
Route::post('/barcode/store', [MessagesController::class, 'storeBarcode'])->name('barcode.storeBarcode');

//SEO
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('seo', PageController::class);
});

//Berita
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.news.index');
Route::get('news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
Route::delete('news/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
Route::put('news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
Route::post('news', [NewsController::class, 'store'])->name('admin.news.store');

// Route::resource('contacts', ContactController::class);
// Route::resource('pages', PageController::class);
// Route::resource('news', NewsController::class);
// Route::resource('services', ServiceController::class);
// Route::resource('members', MemberController::class);
// Route::resource('barcodes', BarcodeController::class);
