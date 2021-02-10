<?php

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

Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

Route::view('/services','services')->name('services');

Route::view('/studios','studios')->name('studios');

Route::view('/contact','contact')->name('contact');

Route::view('/DynamStudio','studios.dynamstudio')->name('dynamstudio');

Route::view('/DynamFactory','studios.dynamfactory')->name('dynamfactory');

Route::view('/D-Tech','studios.dtech')->name('dtech');

Route::view('/SalonVirtuel','studios.salonvirtuel')->name('salonvirtuel');
