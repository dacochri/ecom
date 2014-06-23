<?php

# Base (index, contact, about, etc.)
Route::get('/', 'MainController@index');

# Products
Route::resource('products', 'ProductsController');

# Categories
Route::resource('categories', 'CategoriesController');

# Discounts

# Comments

# Users
