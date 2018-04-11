<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
  'uses'=> 'UserController@getHome',
  'as'=> 'home'
]);

Route::get('/contact', [
  'uses'=> 'UserController@getContact',
  'as'=> 'contact'
]);


Route::get('/search', [
  'uses'=> 'UserController@getSearch',
  'as'=> 'search'
]);

Route::get('/product', [
  'uses'=> 'UserController@getProduct',
  'as'=> 'product'
]);

Route::get('/account', [
  'uses'=> 'UserController@getAccount',
  'as'=> 'account',
  // ,
  'middleware' => 'auth'
]);

Route::get('/login', [
  'uses'=> 'UserController@getLogin',
  'as'=> 'login'
]);

Route::get('/logout', [
  'uses'=> 'UserController@getLogOut',
  'as'=> 'logout'
]);

Route::post('/loginAttempt',[
  'uses' => 'UserController@postLogin',
  'as'=> 'loginAttempt'
]);

Route::post('/createProduct',[
  'uses' =>'ProductController@postAddProduct',
  'as' => 'product.create'
]);
