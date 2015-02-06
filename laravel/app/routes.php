<?php

Route::get("/", "HomeController@showWelcome");

<<<<<<< HEAD
Route::get("/search/{key}/{val}", "SearchController@index");
=======
Route::get('/', 'HomeController@index');
>>>>>>> master
