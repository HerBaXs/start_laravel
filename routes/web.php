<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaqqindaController;
use App\Http\Controllers\ElaqeController; // Bu ise sade yazilan metodudur...
use App\Http\Controllers\MainController;

Route::get('home', [MainController::class, 'index'])->name('home');
Route::get('/about', [HaqqindaController::class, 'haqqinda'])->name('about');
Route::get('/insan/{ad}', [HaqqindaController::class, 'insan']);
Route::get('/elaqe', 'App\Http\Controllers\ElaqeController@index'); // bu route'sun cetin yazilan metodu...


// Route::get('/telebe/{ad?}/{yas?}',function($ad=null , $yas=null){
//     return 'Telebe adi:' . $ad . '<br>yas:' . (30-$yas);
// })->where(['ad' => '[A-Za-z]+', 'yas' => '[0-9]+']);

// Route::get('/telebe',function(){
//     return view('telebe');
// })->name('telebe');

Route::group(['prefix' => '/telebe'], function () {
    Route::get('{ad}', function ($ad) {
        return $ad;
    });

    Route::get('{ad}/{yas}', function ($ad, $yas) {
        return $yas;
    });


});

