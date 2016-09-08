<?php

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

// STATIC
Route::get('/', 'StaticController@about');

Route::get('/hive', 'StaticController@hive');

Route::get('/starting', 'StaticController@getting_started');

Route::get('/analysis', 'StaticController@financial_analysis');

Route::get('/patent', 'StaticController@patent');

Route::get('/services', 'StaticController@services');

// MAIL
Route::get('contact', 'ContactController@contact');

Route::post('sendMail', 'ContactController@sendMail');

// TAGS
Route::get('tags', 'TagController@index');

Route::get('tags/create', 'TagController@create');

Route::post('tags', 'TagController@save');

Route::get('tags/{tag}', 'TagController@edit');

Route::post('tags/{tag}', 'TagController@update');

Route::delete('tags/{tag}', 'TagController@delete');

// AUTH
Route::auth();

// POST - Public
Route::get('blog', 'PostController@blog');

Route::get('about', 'HomeController@index');

Route::get('/blog/{slug}', 'PostController@details');

// POST - Auth
Route::get('posts', ['uses' => 'PostController@index', 'middleware' => 'auth']);

Route::get('posts/create', ['uses' => 'PostController@create', 'middleware' => 'auth']);

Route::post('posts', ['uses' => 'PostController@store', 'middleware' => 'auth']);

Route::get('posts/{post}', ['uses' => 'PostController@edit', 'middleware' => 'auth']);

Route::post('posts/{post}', ['uses' => 'PostController@update', 'middleware' => 'auth']);

Route::delete('posts/{post}', ['uses' => 'PostController@delete', 'middleware' => 'auth']);


// ITEMS - Public
Route::get('catalog', 'ItemController@catalog');

Route::get('catalog/{slug}', 'ItemController@detail');

// ITEMS - Auth
Route::get('items', ['uses' => 'ItemController@index', 'middleware' => 'auth']);

Route::get('items/create', ['uses' => 'ItemController@create', 'middleware' => 'auth']);

Route::post('items', ['uses' => 'ItemController@store', 'middleware' => 'auth']);

Route::get('items/{item}', ['as' => 'item_edit', 'uses' => 'ItemController@edit', 'middleware' => 'auth']);

Route::post('items/{item}', ['uses' => 'ItemController@update', 'middleware' => 'auth']);

Route::delete('items/{item}', ['uses' => 'ItemController@delete', 'middleware' => 'auth']);

Route::get('/images/remove/{image}', ['as' => 'remove_image', 'uses' => 'ImageController@delete', 'middleware' => 'auth']);

// USERS
Route::get('user/profile', [
    'as' => 'profile',
    'uses' => 'UserController@profile',
    'middleware' => 'auth'
]);

Route::post('user/profile', [
    'uses' => 'UserController@update_profile',
    'middleware' => 'auth'
]);

Route::get('user/password', [
    'as' => 'password',
    'uses' => 'UserController@password',
    'middleware' => 'auth'
]);

Route::post('user/update_password', [
    'uses' => 'UserController@update_password',
    'middleware' => 'auth'
]);

// ACTIVITY
Route::get('activities', [
    'as' => 'activity_list',
    'uses' => 'ActivityController@index',
    'middleware' => 'auth'
]);

Route::get('activities/create', [
    'as' => 'activity',
    'uses' => 'ActivityController@create',
    'middleware' => 'auth'
]);

Route::post('activities/create', [
    'uses' => 'ActivityController@save',
    'middleware' => 'auth'
]);

Route::get('activities/edit/{activity}', [
    'uses' => 'ActivityController@edit',
    'middleware' => 'auth'
]);

Route::post('activities/update/{activity}',[
    'uses' => 'ActivityController@update',
    'middleware' => 'auth'
]);

Route::delete('activities/{activity}', [
    'uses' => 'ActivityController@delete',
    'middleware' => 'auth'
]);

// CAROUSEL
Route::get('carousel', [
    'as' => 'carousel',
    'uses' => 'CarouselController@index',
    'middleware' => 'auth'
]);

Route::post('carousel/upload', [
    'as' => 'carousel_upload',
    'uses' => 'CarouselController@upload',
    'middleware' => 'auth'
]);

Route::get('carousel/delete/{file}', [
    'uses' => 'CarouselController@delete',
    'middleware' => 'auth'
]);
