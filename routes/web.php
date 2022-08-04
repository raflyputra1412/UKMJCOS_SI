<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\AuthenticateUserController;
// use App\Http\Controllers\loginController;
use App\Http\Controllers\pengurusController;
use App\Http\Controllers\Data_Anggota\DataAnggotaController;
use App\Http\Controllers\Event\EventsController as EventEventsController;
use App\Http\Controllers\Events\EventsController;
// use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Inventaris\InventarisController;
use App\Http\Controllers\Jadwal_Kegiatan\JadwalKegiatanController;
// use App\Models\JadwalKegiatan;
// use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('welcome');
});
Route::get('/login', [AuthenticateUserController::class, 'create'])->name('login');
Route::post('/login', [AuthenticateUserController::class, 'store']);
Route::get('/logout', [AuthenticateUserController::class, 'destroy'])->name('logout');


Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['auth_check:Pengurus']], function () {
        Route::resource('/dashboard_pengurus', pengurusController::class);
        Route::resource('/data_anggota', DataAnggotaController::class);
        Route::resource('/jadwal_kegiatan', JadwalKegiatanController::class);
        Route::resource('/inventaris', InventarisController::class);
        Route::resource('/events', EventsController::class);
        
    });

    Route::group(['middleware' => ['auth_check:Anggota']], function () {
        Route::resource('/dashboard_anggota', anggotaController::class);
    });

});