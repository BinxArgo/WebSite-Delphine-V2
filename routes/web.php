<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
//HOMEPAGE & website sections <=====
Route::get('/', function () {
    return view('accueil');
    return view('header');
    return view('navbar');
    return view('section');
    return view('jobs');
    return view('bio');
    return view('footer');
    return view('modaltest');
    return view('inscriptmodal');
});




//Logout
route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

//Middleware Logout
route::group(['middleware'=>['AuthCheck']], function(){
    //Dashboard page 
    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    //Login
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    //Register
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
});



//Save
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');


//Login 
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');

//Confidentiality policy page
Route::get('/politique-de-confidentialite', function () {

    return view('politique-de-confidentialite');
    return view('header');
    return view('navbarsecond');
    return view('footer');
    
});

//Language level test part one 
Route::get('/test01', function () {
    return view('test01');
   

});

//Language level test part two
Route::get('/test02', function () {
    return view('test02');
   

});

//Language level test part three
Route::get('/test03', function () {
    return view('test03');
   

});

//Test result page
Route::get('/resultpage', function () {
    return view('resultpage');
   

});
//User profile space
Route::get('/userprofile', function () {
    return view('userprof');
   

});



//Admin dashboard
Route::get('/admin', function () {
    return view('admin');
   

});


//Website Translations route
Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

//Newsltter API route
Route::post('/newsletter', 'NewsLetterController@store');