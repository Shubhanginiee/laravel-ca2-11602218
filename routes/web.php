<?php

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function()
{
    return view('welcome');
});
Route::resource('projects','ProjectsController');