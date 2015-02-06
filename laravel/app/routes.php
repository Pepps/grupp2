<?php

Route::get('/', 'HomeController@index');
Route::get("/search/{key}/{val}", "SearchController@index");
