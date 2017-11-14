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
    return view('welcome');
});

Route::get('/about', function() {
	return '<h1>Halo</h1>'
	.'selamat datang di web app saya<br>'	
	.'Laravel, emaang keren.';


});


Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/about/{id}', function($a){
	return 'Ini Halaman about <b> '.$a.'</b>';
});


Route::get('/kantin/{makanan}/{minuman}/{cemilan}', function($a,$b,$c){
	return 'Saya Memesan <b> '.$a.'</b><br>'
	.'Minumnya <b> '.$b.'</b><br>'
	.'Tambah Cemilan <b> '.$c.'</b>';
});

Route::get('user/{name?}', function($name = 'john'){
	return 'nama saya : ' .$name;
});