<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/product', 'HomeController@product')->name('product');
Route::get('/detail', 'HomeController@detail')->name('detail');
Route::middleware(['admin'])->group(function () {
	Route::name('admin.')->namespace('Admin')->group(function() {
	    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
	    Route::get('profile', 'AdminController@profile')->name('profile');
	    Route::post('general-update', 'AdminController@generalupdate')->name('general.update');
	    Route::post('pass-update', 'AdminController@passupdate')->name('pass.update');

	    Route::name('staff.')->prefix('staff')->group(function() {
	    	Route::get('list', 'StaffController@list')->name('list');
		    Route::get('add', 'StaffController@add')->name('add');
		    Route::post('save/{id?}', 'StaffController@save')->name('save');
		    Route::get('edit/{id?}', 'StaffController@edit')->name('edit');
		    Route::get('delete/{id?}', 'StaffController@delete')->name('delete');
		});
		Route::name('area.')->prefix('area')->group(function() {
	    	Route::get('list', 'AreaController@list')->name('list');
		    Route::get('add', 'AreaController@add')->name('add');
		    Route::post('save/{id?}', 'AreaController@save')->name('save');
		    Route::get('edit/{id?}', 'AreaController@edit')->name('edit');
		    Route::get('delete/{id?}', 'AreaController@delete')->name('delete');
		});
		Route::name('type.')->prefix('type')->group(function() {
	    	Route::get('list', 'TypeController@list')->name('list');
		    Route::get('add', 'TypeController@add')->name('add');
		    Route::post('save/{id?}', 'TypeController@save')->name('save');
		    Route::get('edit/{id?}', 'TypeController@edit')->name('edit');
		    Route::get('delete/{id?}', 'TypeController@delete')->name('delete');
		});
		Route::name('programme.')->prefix('programme')->group(function() {
	    	Route::get('list', 'ProgrammeController@list')->name('list');
		    Route::get('add', 'ProgrammeController@add')->name('add');
		    Route::post('save/{id?}', 'ProgrammeController@save')->name('save');
		    Route::get('edit/{id?}', 'ProgrammeController@edit')->name('edit');
		    Route::get('delete/{id?}', 'ProgrammeController@delete')->name('delete');
		});
		Route::name('class.')->prefix('class')->group(function() {
	    	Route::get('list', 'ClassTypeController@list')->name('list');
		    Route::get('add', 'ClassTypeController@add')->name('add');
		    Route::post('save/{id?}', 'ClassTypeController@save')->name('save');
		    Route::get('edit/{id?}', 'ClassTypeController@edit')->name('edit');
		    Route::get('delete/{id?}', 'ClassTypeController@delete')->name('delete');
		});
	});
});