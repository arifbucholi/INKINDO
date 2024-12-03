<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LayananUserController;
use App\Http\Controllers\DashboardUserController;

// Route::get('/anggota', function () {
//     return view('anggota');
// });

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/kode-etik', function () {
    return view('kode-etik');
});

Route::get('/struktur-asosiasi', function () {
    return view('struktur-asosiasi');
});

Route::get('/learning-center', function () {
    return view('learning-center');
});

Route::get('/cafein', function () {
    return view('cafein');
});

Route::get('/simmap', function () {
    return view('simmap');
});

// Route::get('/konstruksi', function () {
//     return view('konstruksi');
// });

// Route::get('/non-konstruksi', function () {
//     return view('non-konstruksi');
// });


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('admin/seo', function () {
//     return view('admin.seo');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// -----------------------------------------------GUEST------------------------------------------------------------ //
Route::get('/', [DashboardUserController::class, 'index'])->name('index');
Route::get('/profil', [SeoController::class, 'indexProfil'])->name('indexProfil');
Route::get('/alur', [SeoController::class, 'indexAlur'])->name('indexAlur');
Route::get('/produk', [SeoController::class, 'indexProduk'])->name('indexProduk');
Route::get('/berita', [BeritaController::class, 'index'])->name('index.list');
Route::get('/search', [BeritaController::class, 'search'])->name('news.search');
Route::get('/detail-berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');


Route::get('/konstruksi', [LayananUserController::class, 'indexKonstruksi'])->name('indexKonstruksi');
Route::get('/non-konstruksi', [LayananUserController::class, 'indexNonKonstruksi'])->name('indexNonKonstruksi');

Route::get('/anggota', [MemberController::class, 'indexUser'])->name('anggota.indexUser');
Route::get('/anggota/print', [MemberController::class, 'printMembers'])->name('anggota.print');
Route::get('/anggota/download-template', [MemberController::class, 'downloadTemplate'])->name('anggota.downloadTemplate');
Route::get('/anggota/download-pdf', [MemberController::class, 'downloadPDF'])->name('anggota.downloadPDF');
Route::get('/anggota/copy', [MemberController::class, 'copyMembers'])->name('anggota.copy');




// -----------------------------------------------ADMIN------------------------------------------------------------ //


Route::middleware(['auth'])->group(function () {
    //Route halaman
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/messages', [AdminController::class, 'index'])->name('admin.index');

    //Anggota
    Route::get('admin/anggota', [MemberController::class, 'index'])->name('admin.anggota.index');
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

    Route::resource('admin/layanan', LayananController::class);

    Route::get('admin/layanan', [LayananController::class, 'index'])->name('admin.layanan');
    Route::post('layanan/{layanan_id}/add-detail', [LayananController::class, 'addDetail'])->name('detail-layanan.store');
    Route::get('layanan/{layanan_id}', [LayananController::class, 'showDetail'])->name('layanan.detail');
    Route::put('detail-layanan/{id}', [LayananController::class, 'updateDetail'])->name('detail-layanan.update');
    Route::delete('detail-layanan/{id}', [LayananController::class, 'destroyDetail'])->name('detail-layanan.destroy');

    // Route::resource('admin/faq', FAQController::class);
    Route::get('admin/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::post('faq', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::get('faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('faq/{faq}', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('faq/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');
});






// Route::resource('contacts', ContactController::class);
// Route::resource('pages', PageController::class);
// Route::resource('news', NewsController::class);
// Route::resource('services', ServiceController::class);
// Route::resource('members', MemberController::class);
// Route::resource('barcodes', BarcodeController::class);
