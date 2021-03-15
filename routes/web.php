<?php

use Illuminate\Support\Facades\App;
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

Route::get('/{locale?}',function($locale = null){

    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }

        App::setLocale($locale);
    }

    return view('home', [
        'language' => App::getLocale()
    ]);

})->name('home');

Route::get('/about/{locale?}',function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    return view('about', [
        'language' => App::getLocale()
    ]);
})->name('about');

Route::get('/services/{locale?}',function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    return view('services', [
        'language' => App::getLocale()
    ]);
})->name('services');

Route::get('/studios/{locale?}',function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    return view('studios', [
        'language' => App::getLocale()
    ]);
})->name('studios');

Route::get('/contact/{locale?}',function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    return view('contact', [
        'language' => App::getLocale()
    ]);
})->name('contact');

Route::get('/DynamStudio/{locale?}', function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    $files = Storage::disk('images')->allFiles('dynamstudio/rea');

    return view('studios.dynamstudio',[
        'paths' => preg_grep ('/\.jpg|.png|.jpeg |.gif$/i', $files),
        'language' => App::getLocale()
    ]);

})->name('dynamstudio');

Route::get('/DynamFactory/{locale?}', function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    $files = Storage::disk('images')->allFiles('dynamfactory/rea');

    return view('studios.dynamfactory',[
        'paths' => preg_grep ('/\.jpg|.png|.jpeg |.gif$/i', $files),
        'language' => App::getLocale()
    ]);

})->name('dynamfactory');

Route::get('/D-Tech/{locale?}', function($locale = null){
    if($locale !== null) {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(404);
        }
        App::setLocale($locale);
    }
    else{
        App::setLocale('en');
    }

    $files = Storage::disk('images')->allFiles('dtech/rea');

    return view('studios.dtech',[
        'paths' => preg_grep ('/\.jpg|.png|.jpeg |.gif$/i', $files),
        'language' => App::getLocale()
    ]);

})->name('dtech');

Route::view('/SalonVirtuel','studios.salonvirtuel')->name('salonvirtuel');
