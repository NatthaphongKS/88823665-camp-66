<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('myview');
});

use App\Http\Controllers\MyController;

Route::get('/form', [MyController::class, 'showForm']); // แสดงฟอร์ม
Route::post('/generate-table', [MyController::class, 'generateTable']); // รับค่าจากฟอร์มและแสดงตาราง


