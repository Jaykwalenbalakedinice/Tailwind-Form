<?php

use App\Http\Controllers\DigitalLogsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DigitalLogsController::class, 'index'])->name('DigitalLogs.index');
Route::get('/digitalLogs', [DigitalLogsController::class, 'create'])->name('DigitalLogs.digitalForm');
