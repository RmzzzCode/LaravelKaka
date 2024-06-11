<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\Post;
use App\Http\Controllers\Admin;
use App\Http\Controllers;

Route::get('/','App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about','App\Http\Controllers\AboutController@index')->name('about.index');

Route::group(['namespace'=>'App\Http\Controllers\Post'],function(){

    Route::get("/post", 'IndexController')->name('post.index');
    Route::get("/post/create", 'CreateController')->name('post.create');
    Route::post("/post", 'StoreController')->name('post.store');
    Route::get("/post/{post}", 'ShowController')->name('post.show');
    Route::get("/post/{post}/edit", 'EditController')->name('post.edit');
    Route::patch("/post/{post}", 'UpdateController')->name('post.update');
    Route::delete("/post/{post}", 'DestroyController')->name('post.delete');
});
//Route::get("/post/update", 'App\Http\Controllers\PostController@update');
//Route::get("/post/delete", 'App\Http\Controllers\PostController@delete');
//Route::get("/post/first_create", 'App\Http\Controllers\PostController@firstcreate');
//Route::get("/post/update_create", 'App\Http\Controllers\PostController@updatecreate');
//Route::get("/admin", 'App\Http\Controllers\MyPlaceController@index');
Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix'=>'admin'],function(){
    Route::group(['namespace'=>'Post'],function(){
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });

});

Route::get('/contacts',[Controllers\ContactsController::class,'index'])->name('contacts.index');

Route::get('/register','App\Http\Controllers\UserRegister@index')->name('register.index');
Route::post('/register', 'App\Http\Controllers\UserRegister@create')->name('register.create');

Route::get('/login', "App\Http\Controllers\UserRegister@login")->name('login.login');
Route::post('/login', "App\Http\Controllers\UserRegister@sign")->name('login.sign');



