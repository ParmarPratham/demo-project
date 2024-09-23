<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::name('site.')->controller(SiteController::class)->group(function(){
//     Route::get('/','index')->name('index');
// });

Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('about',[SiteController::class,'about'])->name('site.about');
Route::get('contact',[SiteController::class,'contact'])->name('site.contact');
