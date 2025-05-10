<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentController;

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::view('/', 'TrangChu02')->name('home');

Route::view('/gioi-thieu', 'GioiThieu01')->name('gioithieu');

Route::view('/lien-he', 'BookingView')->name('lienhe');

Route::view('/bao-tri', 'BaoTri')->name('baotri');

Route::view('/gam-may', 'GamMay01')->name('gammay');

Route::view('/phuc-hoi', 'PhucHoi')->name('phuchoi');

Route::view('/tin-tuc', 'TinTucMain')->name('tintuc');

Route::view('/tim-kiem-tin-tuc', 'TinTucSearch')->name('tintucsearch');

Route::view('/tin-tuc-chi-tiet', 'TrangTinTuc')->name('trangtintuc');

