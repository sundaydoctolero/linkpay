<?php

/*
 * |Authorization Routes
 */
Route::auth();

/**
 * Dashboard Routes
 */
Route::get('/', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index');


/**
 * SSS Table Routes
 */
Route::get('/admin/setup/sss', 'SSSController@index');
Route::get('/admin/setup/get_sss', 'SSSController@getTable');