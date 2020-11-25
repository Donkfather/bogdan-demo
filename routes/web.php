<?php

use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

//Route::get('/contact', function (){
//    return view('contact');
//});

Route::get('/contact', [ContactController::class, 'show']);

//Route::post('/contact', function (\Illuminate\Http\Request $request){
//    $email = $request->email;
//    return view('contact', compact('email'));
//});

Route::post('/contact', [ContactController::class, 'store']);

