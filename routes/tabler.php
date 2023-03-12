<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablerController;
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

Route::get('/change-layout/{layout}', function ($layout) {
    if(in_array($layout, config('tabler.layouts'))){
      Cache::forever('tabler_layout', $layout);
    }
    return redirect(url()->previous());
});

Route::get('/change-locale/{locale}', function ($locale) {
    if(in_array($locale, ['ar', 'en'])){
      Cache::forever('locale', $locale);
    }
    return redirect(url()->previous());
});

Route::get('/dashboard', [TablerController::class, 'index']);
Route::get('/dashboard/{page}', [TablerController::class, 'page']);
Route::get('/tabler-panel/{layout}/docs/{page}', [TablerController::class, 'index']);

