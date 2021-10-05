<?php

use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Auth::routes();

Route::get('/', function () {
    return view('layout.login');
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/unitpost', 'HomeController@unitpost')->name('unitpost')->middleware('auth');

// Route::group(['middleware' => 'can:isAutor'], function () {
//     Route::get('post-unit', 'PostController')->name('post-unit');
// });
Route::group(['middleware' => 'can:isAdmin'], function () {
    Route::resource('tahun', 'TahunController');
    Route::resource('kriteria', 'KriteriaController');
    Route::resource('unit', 'UnitController');
    Route::resource('user', 'UserController');
    Route::resource('dokumen', 'DokumenController');
});

Route::resource('post', 'PostController')->middleware('can:isAutor');


Route::resource('postunit', 'PostUnitController');


// Route::resource('user', 'UserController');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('post-unit', 'PostController@unitpost');
// Route::get('dokumen', 'PostController');
