<?php

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
    return view('omah');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
// return view('welcome');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::group(['middleware' => 'Admin'], function(){
<<<<<<< HEAD
        Route::get('Siswa', function () {
            return view('kelas.index');
    });
        Route::get('pelanggaran/index','PelanggaranController@create');
        Route::post('pelanggaran','PelanggaranController@store');
        // Route::post('pelanggaran/view','PelanggaranController')
// Route::get('pelanggaran.index',function (){
// 	return view('pelanggaran.index');
//  });

=======
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/data/{id}', 'SiswaController@tampil');
    Route::get('/Tambah', 'SiswaController@kelas');
    Route::post('siswa/create', 'SiswaController@tambah');
    Route::get('/kelas', 'SiswaController@data_kelas');
    Route::get('/Add', 'SiswaController@add');
    Route::post('kelas/create', 'SiswaController@store');
    Route::delete('/delete/{id}', 'SiswaController@destroy');
    Route::get('/edit/{id}', 'SiswaController@edit');
    Route::put('update/{id}', 'SiswaController@update');
>>>>>>> 986e15721754ee2ce0b9c8f2a4c91c308b7cb7c5
});
Auth::routes();