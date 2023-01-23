<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrateurController;
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
    return view('Admin.connexion');
})->middleware('isLoggedIn');

// Route::get('/Connexion', function () {
//     return view('Admin.connexion');
// });

// Route::get('', function () {
//     return view('Admin.index');
// });

Route::resource('Inscription',AdministrateurController::class)->middleware('alreadyLoggedIn');
Route::get("Connexion","App\Http\Controllers\AdministrateurController@afficheConnect")->name("Connnexion.afficheConnect")->middleware('alreadyLoggedIn');
Route::post('login-user',[AdministrateurController::class,'loginUser'])->name('login-user');
Route::get('/dashboard', [AdministrateurController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [AdministrateurController::class,'logout']);
// Route::resource('adminSave',AdministrateurController::class);

Route::get('/buttons', function() {
    return view('Admin.pages.ui-features.buttons');
});

Route::get('/typography', function(){
    return view('Admin.pages.ui-features.typography');
});

Route::get('/edit',[AdministrateurController::class,'edit'])->name("edit-user")->middleware('alreadyLoggedIn');
Route::post('/update',[AdministrateurController::class,'update'])->name("update")->middleware('alreadyLoggedIn');
