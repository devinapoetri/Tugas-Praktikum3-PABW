<?php

use App\Http\Controllers\DataMhs;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MahasiswaController;

Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);

Route::get('/students', [StudentController::class, 'index'])-> name('students.index');

Route::get('form', [DataController::class, 'form']);
Route::post('proses', [DataController::class, 'proses']);

Route::get('formbiodata', [DataMhs::class, 'formbiodata']);
Route::post('data', [DataMhs::class, 'data']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hello, Devina Budianti Poetri!');
});

Route::get('/user/{name}', function ($name) {
    return ("Nama saya, $name");
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return ("Halo, $name");
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Devina Budianti Poetri']);
});


Route::get('/home', function () {
    return ('Halo, ini adalah halaman home');
})-> name ('home.page');

// route tubes
Route::get('/home', function () {
    return ('home');
});

Route::get('/login', function () {
    return ('login');
}); 

Route::post('/login', function () {
    return ('login');
}); 

Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/detaildestinasi', function () {
    return view('detaildestinasi');
});

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi');
});

Route::get('/profil', function () {
    return view('profil');
});