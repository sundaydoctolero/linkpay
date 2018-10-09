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


/**
 * HDMF Table Routes
 */
Route::get('/admin/setup/pagibig', 'HDMFController@index');
Route::get('/admin/setup/get_pagibig', 'HDMFController@getTable');

/**
 * PHIC Table Routes
 */
Route::get('/admin/setup/phil_health', 'PHICController@index');
Route::get('/admin/setup/get_phil_health', 'PHICController@getTable');

/**
 * Leave Type Table Routes
 */
Route::get('/admin/setup/leave', 'LeaveTypeController@index');
Route::get('/admin/setup/get_leave_type', 'LeaveTypeController@getTable');


/**
 * Payroll Routes
 */
Route::get('/admin/payroll', 'PayrollController@index');


/**
 * Employee Routes
 *
 */
Route::get('/admin/employee', 'EmployeeController@index');