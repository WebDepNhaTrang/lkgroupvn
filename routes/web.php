<?php

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

Route::group(['prefix' => 'administrator'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('lkgroupvn.index');
})->name('homepage');

Route::get('lkcoffee.html', function () {
    return view('lkcoffee.index');
})->name('lkcoffee');

Route::post('getGalleryBySlug',['uses' => 'FrontendController@getGalleryBySlug', 'as' => 'post.getGalleryBySlug']);
Route::post('getBlogById',['uses' => 'FrontendController@getBlogById', 'as' => 'post.getBlogById']);