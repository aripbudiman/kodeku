<?php

use App\Models\User;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Artikel\ListArticle;
use Illuminate\Support\Facades\Route;
use App\Livewire\Artikel\SingleArticle;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', HomePage::class)->name('home-page');
Route::get('/topic', App\Livewire\Topic\Topic::class)->name('topic');
Route::get('/artikel', ListArticle::class)->name('article');
Route::get('/artikel/{slug}', SingleArticle::class)->name('single-article');
Route::get('/auth/{provider}',[App\Http\Controllers\SocialController::class,'redirect'])->name('auth.provider');
Route::get('/auth/{provider}/callback',[App\Http\Controllers\SocialController::class,'callback'])->name('auth.provider.callback');

Route::middleware(['guest'])->group(function () {
    Route::get('/login',\App\Livewire\Auth\LoginPage::class)->name('login');
});
Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
