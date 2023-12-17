<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\JawabanController;
use App\Http\Controllers\Admin\KuesionerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProgramStudiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class,'home'])->name("admin");
    Route::get('/dashboard-p4mp-{jurusan}-{tingkat}-{periode}', [UserController::class,'home_p4mp'])->name("admin-p4mp");
    Route::get('/laporan', function () { return view('admin.laporan.index'); })->name("laporan");

    Route::get('/kuesioner-{kategori}', [KuesionerController::class,'kategori'])->name('kuesioner.kategori');
    Route::get('/kuesioner/pertanyaan', [KuesionerController::class,'pertanyaan'])->name('kuesioner.pertanyaan');
    Route::post('/kuesioner/jawab', [JawabanController::class,'store'])->name('kuesioner.jawab');
    Route::resource('/kuesioner', KuesionerController::class);

    Route::get('/jawaban-{periode}', [JawabanController::class,'kategori'])->name('jawaban.kategori');
    Route::get('/jawaban/detail-{id}', [JawabanController::class,'detail'])->name('jawaban.detail');
    Route::get('/jawaban/rekap-{kategori}', [JawabanController::class,'rekap'])->name('jawaban.rekap');
    Route::resource('/jawaban', JawabanController::class);

    Route::get('/user-{jurusan}-{tingkat}-{periode}', [UserController::class,'mahasiswa'])->name('user.mahasiswa');
    Route::get('/user/{jurusan}', [UserController::class,'jurusan'])->name('user.jurusan');
    Route::get('/user-{role}', [UserController::class,'index'])->name('user.role');
    Route::put('/user/reset/{id}', [UserController::class,'resetPassword'])->name('user.reset');
    Route::resource('/user', UserController::class);

    Route::post('/import', 'App\Http\Controllers\ImportController@import')->name('import');
    Route::post('/export-jawaban', [ExportController::class,'jawaban'])->name('export.jawaban');

    // /master data jurusan
    Route::resource('jurusan', JurusanController::class);
    //masterdata Programstudi
    Route::resource('program-studi', ProgramStudiController::class);
});
