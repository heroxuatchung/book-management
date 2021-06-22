<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/'],function(){

    

    Route::get('/index','Auth\BookController@index')->name('view_book');

    Route::get('/view_add','Auth\BookController@viewAdd')->name('view_add');

    Route::post('/post_add','Auth\BookController@postAdd')->name('post_add');

    Route::get('/view_edit/{id}','Auth\BookController@viewEdit')->name('view_edit');

    Route::post('/post_edit/{id}','Auth\BookController@postEdit')->name('post_edit');

    Route::get('/delete/{id}','Auth\BookController@delete')->name('delete');

    Route::get('/search','Auth\BookController@search');

});