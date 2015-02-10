<?php

Route::get('/', 'HomeController@index');
Route::get("/search/{option}/{key}/{val}", "SearchController@index");
