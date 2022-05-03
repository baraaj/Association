<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateursController;


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

Route::get('/',[UtilisateursController::class,"index"]);
Route::get('/profile', function () {
    return view('dashboard_my_profile');
});
Route::get('/blog', function () {
    return view('blog_page');
});
Route::get('/pass',[UtilisateursController::class,"pass"]);
 
Route::get('/learning', function () {
    return view('learning');
});
Route::get('/contact', function () {
    return view('contact');
});
/*Route::get('/password', function () {
    return view('change_password');
});*/
 
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::post('/create',[UtilisateursController::class,"store"]);
Route::post('/log',[UtilisateursController::class,"login"]);
Route::post('/modif',[UtilisateursController::class,"up"]);

Route::get('header/{cpassword}',[UtilisateursController::class,"store"]);
Route::get('header/{password}',[UtilisateursController::class,"login"]);

