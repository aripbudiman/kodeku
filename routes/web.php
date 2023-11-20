<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Topic\Topic;
use App\Livewire\Artikel\SingleArticle;
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
Route::get('/topic', Topic::class)->name('topic');
Route::get('/artikel/{slug}', SingleArticle::class)->name('single-article');
