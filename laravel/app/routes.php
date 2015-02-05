<?php

Route::get("/", "HomeController@showWelcome");

Route::get("/search/{key}/{val}", "SearchController@index");
