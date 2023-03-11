<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\TablerController;
use Illuminate\Support\Facades\File;
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
      Cookie::queue('tabler_layout', $layout, 100*365*24*60);
    }
    return redirect(url()->previous());
});

Route::get('/change-locale/{locale}', function ($locale) {
    if(in_array($locale, ['ar', 'en'])){
      Cookie::queue('locale', $locale, 100*365*24*60);
    }
    return redirect(url()->previous());
});

Route::get('/dashboard', [TablerController::class, 'index']);
Route::get('/dashboard/{page}', [TablerController::class, 'page']);
Route::get('/tabler-panel/{layout}/docs/{page}', [TablerController::class, 'index']);

