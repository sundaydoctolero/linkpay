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
