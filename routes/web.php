<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/DynamStudio', function(){

    $files = Storage::disk('images')->allFiles('dynamstudio');

    return view('studios.dynamstudio',[
        'paths' => preg_grep ('/\.jpg|.png|.jpeg |.gif$/i', $files)
    ]);

})->name('dynamstudio');

Route::get('/DynamFactory', function(){

    $files = Storage::disk('images')->allFiles('dynamfactory');

    return view('studios.dynamfactory',[
        'paths' => preg_grep ('/\.jpg|.png|.jpeg |.gif$/i', $files)
    ]);

})->name('dynamfactory');

Route::get('/D-Tech', function(){

    $files = Storage::disk('images')->allFiles('dtech');

    return view('studios.dtech',[
        'paths' => preg_grep ('/\.jpg|.png|.jpeg |.gif$/i', $files)
    ]);

})->name('dtech');

Route::view('/SalonVirtuel','studios.salonvirtuel')->name('salonvirtuel');
