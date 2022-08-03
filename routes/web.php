<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\UserController;
use App\Models\Ads;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    $ads = Ads::all(); //This line to get data in home page
    return view('welcome', ['ads' => $ads]);
})->name('myhome');


// route for ads
Route::resource('ads', AdsController::class)->middleware('auth');
Route::get('single-page/{id}', [AdsController::class, 'SingelPage'])->name('singel.page.ad');

// this routes for user profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'show'])->name('profile.show');
    Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/profile/{id}', [UserController::class, 'update'])->name('profile.update');
});


// Category Search
Route::get('/search', [CateController::class, 'search_category'])->name('search_category');


// Auth routes for login and regestier
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
