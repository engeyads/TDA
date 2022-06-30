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
Route::get("istanbul-properties", "frontEndController@istanbulproperties");
Route::get("properties", "frontEndController@properties");
Route::get("wednesday", "frontEndController@wednesday");
Route::get("rent", "frontEndController@rent");
Route::get("froud", "frontEndController@froud");
Route::get("blog", "frontEndController@blog");
Route::get("channel", "frontEndController@channel");
Route::get("about", "frontEndController@about");
Route::get("dictionary", "frontEndController@dictionary");

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    return view('frontend.index');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

