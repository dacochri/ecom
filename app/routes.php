<?php

# Base (index, contact, about, etc.)
Route::get('/', 'MainController@index');

# Products
Route::get('/products', 'ProductsController@index');
Route::get('/products/show/{id}', 'ProductsController@showProduct');
Route::get('/products/new', 'ProductsController@newProduct');
Route::get('/products/edit/{id}', 'ProductsController@editProduct');
Route::post('/products/create', 'ProductsController@createProduct');
Route::post('/products/update/{id}', 'ProductsController@updateProduct');
Route::get('/products/destroy/{id}', 'ProductsController@destroyProduct');

# Categories
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/show/{id}', 'CategoriesController@showCategory');
Route::get('/categories/new', 'CategoriesController@newCategory');
Route::get('/categories/edit/{id}', 'CategoriesController@editCategory');
Route::post('/categories/create', 'CategoriesController@createCategory');
Route::post('/categories/update/{id}', 'CategoriesController@updateCategory');
Route::get('/categories/destroy/{id}', 'CategoriesController@destroyCategory');

# Discounts

# Comments

# Users
