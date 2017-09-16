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
    if(Auth::check())
    {
        return redirect('/home');
    }
    return view('omah');
});
//Route user
Route::group(['middleware' => 'auth'], function () {
    //Catat Pelanggaran
    Route::get('Catat', 'UserController@index');
    Route::get('/Siswa/{id}', 'UserController@tampil');
    Route::get('/Pelanggaran/{id}', 'UserController@tambah');
    Route::post('pelanggaran/create', 'UserController@store');
});

//Route admin
Route::group(['middleware' => 'Admin'], function(){
    //Pelanggaran
    Route::get('pelanggaran/index','PelanggaranController@create');
    Route::post('pelanggaran','PelanggaranController@store');
    Route::get('pelanggaran/view','PelanggaranController@index');
    Route::get('pelanggaran/edit/{id}', 'PelanggaranController@edit');
    Route::put('pelanggaran/{id}','PelanggaranController@update');
    Route::delete('pelanggaran/{id}','PelanggaranController@destroy');
    //Siswa
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/data/{id}', 'SiswaController@tampil');
    Route::get('/Tambah', 'SiswaController@kelas');
    Route::post('siswa/create', 'SiswaController@tambah');
    //kelas
    Route::get('/Add', 'SiswaController@add');
    Route::post('kelas/create', 'SiswaController@store');
    Route::delete('/delete/{id}', 'SiswaController@destroy');
    Route::get('/edit/{id}', 'SiswaController@edit');
    Route::put('update/{id}', 'SiswaController@update');
    Route::get('/kelas', 'SiswaController@data_kelas');
    //CRUD Siswa
    Route::get('/ubah/{id}', 'SiswaController@ubah');
    Route::put('/ubah/ganti/{id}', 'SiswaController@ganti');
    Route::delete('/data/{id}', 'SiswaController@hapus');
    Route::get('/catatan', 'SiswaController@catatan');
});
Auth::routes();