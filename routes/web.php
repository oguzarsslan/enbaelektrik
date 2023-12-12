<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Auth;


Route::get('/login', [AdminPanelController::class, 'login']);
Route::post('/signin', [AdminPanelController::class, 'signin']);
Route::get('/logout', [AdminPanelController::class, 'logout']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/hakkimizda', [HomeController::class, 'hakkimizda']);
Route::get('/projelerimiz', [HomeController::class, 'projelerimiz']);
Route::get('/tamamlanan-projelerimiz', [HomeController::class, 'tamamlanan_projelerimiz']);
Route::get('/devam-eden-projelerimiz', [HomeController::class, 'devam_eden_projelerimiz']);
Route::get('/projelerimiz/{id}', [HomeController::class, 'projeDetay']);
Route::get('/iletisim', [HomeController::class, 'iletisim']);

Route::get('locale/{locale?}', [HomeController::class, 'locale']);

Route::middleware([Auth::class])->prefix('panel')->group(function () {

    Route::get('/', [AdminPanelController::class, 'index']);
    Route::get('/anasayfa_hakkimizda', [AdminPanelController::class, 'homeAbout']);
    Route::post('/homeAbout_upload', [AdminPanelController::class, 'homeAbout_upload']);
    Route::post('/update_settings', [AdminPanelController::class, 'update_settings']);
    Route::get('/hakkimizda', [AdminPanelController::class, 'hakkimizda']);
    Route::post('/update_hakkimizda', [AdminPanelController::class, 'update_hakkimizda']);
    Route::get('/logo', [AdminPanelController::class, 'logo']);
    Route::post('/logo_upload/{id}', [AdminPanelController::class, 'logo_upload']);
    Route::get('/delete_image/{id}', [AdminPanelController::class, 'delete_image']);
    Route::get('/slide', [AdminPanelController::class, 'slide']);
    Route::get('/delete_slide/{id}', [AdminPanelController::class, 'delete_slide']);
    Route::post('/upload_slide', [AdminPanelController::class, 'upload_slide']);
    Route::get('/projeler', [AdminPanelController::class, 'projeler']);
    Route::get('/projeler/{id}', [AdminPanelController::class, 'showProje']);
    Route::get('/delete_proje/{id}', [AdminPanelController::class, 'delete_proje']);
    Route::get('/showPost/{id}', [AdminPanelController::class, 'showPost']);
    Route::get('/unshowPost/{id}', [AdminPanelController::class, 'unshowPost']);
    Route::get('/completed/{id}', [AdminPanelController::class, 'completed']);
    Route::get('/unCompleted/{id}', [AdminPanelController::class, 'unCompleted']);
    Route::get('/proje_olustur', [AdminPanelController::class, 'proje_olustur']);
    Route::post('/proje_store', [AdminPanelController::class, 'proje_store']);
    Route::post('/proje_update/{id}', [AdminPanelController::class, 'proje_update']);

});





