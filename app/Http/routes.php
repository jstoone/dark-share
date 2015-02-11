<?php

/*
 * Snippets
 */
Route::resource('snippets', 'SnippetsController');
Route::get('snippets/login/{snippets}', [
	'as'    => 'snippets.login',
	'uses'  => 'SnippetsController@login',
]);
Route::post('snippets/authenticate/{snippets}', [
	'as'    => 'snippets.auth',
	'uses'  => 'SnippetsController@authenticate',
]);

/*
 * Auth
 */
Route::get('auth/login', [
	'as' => 'auth.login',
	'uses'  => 'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
	'as' => 'auth.login',
	'uses'  => 'Auth\AuthController@postLogin'
]);
Route::get('auth/register', [
	'as' => 'auth.register',
	'uses'  => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
	'as' => 'auth.register',
	'uses'  => 'Auth\AuthController@postRegister'
]);
Route::get('auth/logout', [
	'as' => 'auth.logout',
	'uses'  => 'Auth\AuthController@getLogout',
]);

/*
 * Controllers
 */
Route::controllers([
	'password' => 'Auth\PasswordController',
	''  =>  'PagesController',
]);

