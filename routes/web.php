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
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/data/{id}', 'SiswaController@tampil');
    Route::get('tambah', function () {
        return view('siswa.tambah');
    });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    Route::get('/tambah', 'SiswaController@kelas');
    Route::post('siswa/create', 'SiswaController@tambah');
=======
        Route::get('kelas', 'SiswaController@kelas');
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
=======
        Route::get('kelas', 'SiswaController@kelas');
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
=======
        Route::get('kelas', 'SiswaController@kelas');
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
});
Auth::routes();