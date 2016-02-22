<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
});

Route::group(['middleware' => ['web', 'auth']], function () {
    //  landing page
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('laporan-pekanan-siswa/form-materi', 'LaporanPekananSiswaController@formMateri');

    Route::resource('tahun-ajaran', 'TahunAjaranController');
    Route::resource('kelas', 'KelasController');
    Route::resource('ruang', 'RuangController');
    Route::resource('karyawan', 'KaryawanController');
    Route::resource('mata-pelajaran', 'MataPelajaranController');
    Route::resource('siswa', 'SiswaController');
    Route::resource('orang-tua', 'OrangTuaController');
    Route::resource('bab', 'BabController');
    Route::resource('laporan-pekanan-siswa', 'LaporanPekananSiswaController');

    //  Non resource
    Route::get('jenjang', 'JenjangController@index');
    Route::post('kelas/tambah-siswa/{kelas}', 'KelasController@tambahSiswa');
    Route::post('kelas/hapus-siswa/{kelas}', 'KelasController@hapusSiswa');
});
