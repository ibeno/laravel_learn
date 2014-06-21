<?php

//Route to show the login form
Route::get('/', array('uses'	=>	'HomeController@showLogin'));

//Route to process the form
Route::post('login', array('uses'	=>	'HomeController@doLogin'));

//Route to Logout
Route::post('logout', array('uses'	=>	'HomeController@doLogout'));

//Route to admin page
Route::get('dash', array('uses'	=>	'DashboardController@showDash'));