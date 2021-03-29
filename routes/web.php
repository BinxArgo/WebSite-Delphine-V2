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

Route::get('/', function () {
    return view('accueil');
    return view('header');
    return view('navbar');
    return view('section');
    return view('jobs');
    return view('bio');
    return view('footer');
});


Route::get('/politique-de-confidentialite', function () {

    return view('politique-de-confidentialite');
    return view('header');
    return view('navbarsecond');
    return view('footer');
    return view('main');
});

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::post('/newsletter', 'NewsLetterController@store');